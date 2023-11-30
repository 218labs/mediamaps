<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Category;
use App\Service\Table;
use App\Form\CategoryType;
use App\Form\Search\CategorySearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CategoryController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/categories", name="categories")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/category/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/table", name="categories.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/{id}/details", name="categories.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $categories = $this->getDoctrine()->getRepository(Category::class)->find($id);
    if (!$categories) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Category details"),
        'body' => $this->renderView('admin/category/details.html.twig', [
          'categories' => $categories
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/create", name="categories.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Add category"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/categories/{id}/update", name="categories.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Edit category"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/categories/{id}/store", name="categories.store", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function store(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    // validate form data
    $form = $this->getForm($request, $user);
    if (!$form->isValid()) {
      return $this->json([
        'status' => 'error',
        'message' => (string) $form->getErrors(true, false)
      ]);
    }
    $user_id = $user->getId();
    $em = $this->getDoctrine()->getManager();
    $entity = $form->getData();
    $isNew = !$entity->getId();
    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "category",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'categories',
      'status' => 'success',
      'message' => $translator->trans("Category saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/categories/{id}/delete", name="categories.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Category::class)
      ->createQueryBuilder('s')
      ->where('d.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les categories ont été supprimées");
    } else {
      $message = $translator->trans("La categories a bien été supprimée");
    }

    return $this->json([
      'tableId' => 'categories',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'Name', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('i.id', 'DESC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/categories/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/categories/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/categories/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $categoriesRepo = $this->getDoctrine()->getRepository(Category::class);
    $query = $categoriesRepo->createQueryBuilder('i');

    // search params
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['i.name']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }
    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Category::class)->find($id);
    } else {
      $entity = new Category();
    }
    $form = $this->createForm(CategoryType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('categories.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(CategorySearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
