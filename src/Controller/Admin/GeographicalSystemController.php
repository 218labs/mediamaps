<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\GeographicalSystem;
use App\Service\Table;
use App\Form\GeographicalSystemType;
use App\Form\Search\GeographicalSystemSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class GeographicalSystemController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/geographical_systems", name="geographical_systems")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/geographical_systems/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/geographical_systems/table", name="geographical_systems.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/geographical_systems/create", name="geographical_systems.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Add Geographycal system"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/geographical_systems/{id}/update", name="geographical_systems.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Edit Geographycal system"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/geographical_systems/{id}/store", name="geographical_systems.store", defaults={"id"=0})
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
      "GeographycalSystem",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'geographical_systems',
      'status' => 'success',
      'message' => $translator->trans("Geographycal system saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/geographical_systems/{id}/delete", name="geographical_systems.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(GeographicalSystem::class)
      ->createQueryBuilder('s')
      ->where('d.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Geographycal systems deteted");
    } else {
      $message = $translator->trans("Geographycal system deleted");
    }

    return $this->json([
      'tableId' => 'geographical_systems',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('name', 'name', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('g.id', 'DESC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/geographical_systems/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/geographical_systems/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/geographical_systems/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $geographical_systemsRepo = $this->getDoctrine()->getRepository(GeographicalSystem::class);
    $query = $geographical_systemsRepo->createQueryBuilder('g');

    // search params
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['g.name']);
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
      $entity = $this->getDoctrine()->getRepository(GeographicalSystem::class)->find($id);
    } else {
      $entity = new GeographicalSystem();
    }
    $form = $this->createForm(GeographicalSystemType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('geographical_systems.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(GeographicalSystemSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
