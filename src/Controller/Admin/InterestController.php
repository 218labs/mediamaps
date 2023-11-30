<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Interest;
use App\Service\Table;
use App\Form\InterestType;
use App\Form\Search\InterestSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class InterestController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/interest", name="interests")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/interest/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/interest/table", name="interests.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/interest/{id}/details", name="interests.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $interests = $this->getDoctrine()->getRepository(Interest::class)->find($id);
    if (!$interests) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Interest details"),
        'body' => $this->renderView('admin/interest/details.html.twig', [
          'interests' => $interests
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/interest/create", name="interests.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Add interest"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/interest/{id}/update", name="interests.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Edit interest"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/interest/{id}/store", name="interests.store", defaults={"id"=0})
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
      "interest",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'interests',
      'status' => 'success',
      'message' => $translator->trans("Interest saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/interest/{id}/delete", name="interests.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Interest::class)
      ->createQueryBuilder('s')
      ->where('d.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les interests ont été supprimées");
    } else {
      $message = $translator->trans("La interests a bien été supprimée");
    }

    return $this->json([
      'tableId' => 'interests',
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
      'route' => '/admin/interest/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/interests/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/interest/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $interestsRepo = $this->getDoctrine()->getRepository(Interest::class);
    $query = $interestsRepo->createQueryBuilder('i');

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
      $entity = $this->getDoctrine()->getRepository(Interest::class)->find($id);
    } else {
      $entity = new Interest();
    }
    $form = $this->createForm(InterestType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('interests.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(InterestSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
