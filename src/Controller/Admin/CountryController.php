<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Country;
use App\Service\Table;
use App\Form\CountryType;
use App\Form\Search\CountrySearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CountryController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/countries", name="countries")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/countries/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/countries/table", name="countries.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/countries/{id}/details", name="countries.details")
   * @IsGranted("ROLE_ADMIN")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $country = $this->getDoctrine()->getRepository(Country::class)->find($id);
    if (!$country) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Country details"),
        'body' => $this->renderView('admin/countries/details.html.twig', [
          'country' => $country
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/countries/create", name="countries.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Add country"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/countries/{id}/update", name="countries.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Edit country"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/countries/{id}/store", name="countries.store", defaults={"id"=0})
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
      "country",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'countries',
      'status' => 'success',
      'message' => $translator->trans("Country saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/countries/{id}/delete", name="countries.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Country::class)
      ->createQueryBuilder('s')
      ->where('d.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Countries deleted");
    } else {
      $message = $translator->trans("Country deleted");
    }

    return $this->json([
      'tableId' => 'countries',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('countryname', 'Name', ['sortable' => true]);
    $table->addColumn('continentname', 'Continent', ['sortable' => true]);
    $table->addColumn('capital', 'Capital', ['sortable' => true]);
    $table->addColumn('currencyCode', 'Currency', ['sortable' => true]);
    $table->addColumn('telephonePrefix', 'Prefix', ['sortable' => true]);
    $table->addColumn('fipscode', 'Flag', [
      'sortable' => true,
      'render' => function($entity) {
        $fipscode = $entity->getCountrycode();
        return "<img src='/img/flags/svg/{$fipscode}.svg' alt='{{$fipscode}}'>";
      }
    ]);

    $table->setPrimaryKey('id');
    $table->setOrder('c.countryname', 'ASC');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/countries/[id]/update'
    ]);
    $table->addAction('details', [
      'type'  => 'modal',
      'label' => 'Détails',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/countries/[id]/details'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/countries/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/countries/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/

    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $countriesRepo = $this->getDoctrine()->getRepository(Country::class);
    $query = $countriesRepo->createQueryBuilder('c');

    // search params
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['c.countryname, c.continentname']);
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
      $entity = $this->getDoctrine()->getRepository(Country::class)->find($id);
    } else {
      $entity = new Country();
    }
    $form = $this->createForm(CountryType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('countries.store', ['id' => $id])
    ]);

    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(CountrySearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
