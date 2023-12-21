<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\Compaign;
use App\Entity\Link;
use App\Entity\Media;
use App\Service\Table;
use App\Form\CompaignType;
use App\Form\Search\CompaignSearchType;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Symfony\Component\HttpFoundation\JsonResponse;

class CompaignController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/compaigns", name="compaigns")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/compaign/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/compaigns/table", name="compaigns.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/compaigns/export", name="compaigns.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("List of compaigns %date%", ['date' => date('d-m-Y Hi')]);

    return $table->export($query, $filename, $format);
  }


  /**
   * @Route(methods={"GET"}, path="/admin/compaigns/{id}/details", name="compaigns.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $m_id = $request->get('m_id');
    $c_id = $request->get('c_id');
    $l_id = $request->get('l_id');
    $compaignRepo = $this->getDoctrine()->getRepository(Compaign::class);
    $compaign = $compaignRepo->findById($user, $id);

    if (!$compaign) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Compaign not found")
      ])
    ]);

    $medias = $languages = $countries = $categories = [];
    $links = $compaign->getLinks();
    $visitors_count = $folowers_count = $facebook_count = $twitter_count = $instagram_count = $youtube_count =  0;
    
    foreach ($links as $link) {
      $lang_id = $link->getLanguageId();
      $media_id = $link->getMediaId();
      $category_id = $link->getCategoryId();
      $category = $link->getCategory();
      $lien = $link->getLink();


      if ( ! array_key_exists($lang_id, $languages) ) $languages[$lang_id] = $link->getLanguage();
      if ( ! array_key_exists($category_id, $categories) ) $categories[$category_id] = [$category, 0];
      $categories[$category_id][1] += 1;
      if ( ! array_key_exists($media_id, $medias) && $link->getMedia() ) {

        //count by social media
         $facebook_count += (int)$link->getMedia()->getFacebookFollowersCount();
         $twitter_count += (int)$link->getMedia()->getTwitterFollowersCount();
         $instagram_count += (int)$link->getMedia()->getInstagramFollowersCount();
         $youtube_count += (int)$link->getMedia()->getYoutubeFollowersCount();

         if ( !in_array($category_id, [14,15,16,17,18]) ){
          $medias[$media_id] = [$link->getMedia()->getImage(), $link->getMedia()];
          $visitors_count += $link->getMedia()->getVisitorsCount();
         }
         else{
          $folowers_count += $link->getMedia()->getVisitorsCount();
         }
         

        if ( !array_key_exists($link->getMedia()->getCountryId(), $countries) ) {
          if ( $link->getMedia()->getCountry() ){
            $countries[$link->getMedia()->getCountryId()] = [$link->getMedia()->getCountry()->getCountrycode(), $link->getMedia()->getCountry()->getCountryName()];
          }
        }
      }
    }


    return $this->render('admin/compaign/details.html.twig', [
      'compaign' => $compaign,
      'links' => $links,
      'languages' => $languages,
      'categories' => $categories,
      'medias' => $medias,
      'countries' => $countries,
      'facebook_count' => $facebook_count,
      'twitter_count' =>  $twitter_count,
      'instagram_count' => $instagram_count,
      'youtube_count' => $youtube_count,
      'links_count' => count($links),
      'countries_count' => count($countries),
      'medias_count' => count($medias),
      'languages_count' => count($languages),
      'visitors_count' => $visitors_count,
      'folowers_count' => $facebook_count+$twitter_count+$instagram_count+$youtube_count,
    ]);

     
  }

  /**
   * @Route(methods={"GET"}, path="/admin/compaigns/create", name="compaigns.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Add compaign"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/compaigns/{id}/update", name="compaigns.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $compaigns = $this->getDoctrine()->getRepository(Compaign::class)->findById($user, $id);
    if (!$compaigns) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Compaign not found")
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/form.html.twig', [
        'title' => $translator->trans("Edit compaign"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/compaigns/{id}/store", name="compaigns.store", defaults={"id"=0})
   */
  public function store(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    //Validate form data
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
    if ( !$entity->getUser() ) $entity->setUser($user);
    $em->persist($entity);
    $em->flush();

    // log activity
    $em->getRepository(Log::class)->store(
      $user_id,
      $entity->getId(),
      "compaign",
      $isNew ? 'create' : 'update'
    );

    return $this->json([
      'tableId' => 'compaigns',
      'status' => 'success',
      'message' => $translator->trans("Compaign saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/compaigns/{id}/delete", name="compaigns.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Compaign::class)
      ->createQueryBuilder('s')
      ->where('d.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("Les compaigns ont été supprimées");
    } else {
      $message = $translator->trans("La compaigns a bien été supprimée");
    }

    return $this->json([
      'tableId' => 'compaigns',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table, $asQuery = false)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('subject', 'Subject', ['sortable' => true]);
    $table->addColumn('subject', 'Subject', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          $subject = $entity->getSubject();

          return "<a href='/admin/compaigns/{$id}/details' class='pointer'>{$subject}</a>";
      }
    ]);
    //$table->addColumn('links_count', 'Links count', ['sortable' => true]);
    //$table->addColumn('medias_count', 'Medias count', ['sortable' => true]);
    $table->addColumn('user', 'Created by', ['sortable' => true]);

    $table->setPrimaryKey('id');
    $table->setOrder('c.id', 'DESC');
    $table->addAction('details', [
      'label' => 'Details',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/compaigns/[id]/details'
    ]);
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Edit',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/compaigns/[id]/update'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'History',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/compaigns/[id]'
    ]);
    //$table->addDivider();
    //check if owner and compaign has 0 links
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Delete',
      'icon'  => 'bi bi-x-lg',
      'confirm' => true,
      'route' => '/admin/compaigns/[id]/delete',
      'display' => function ($entity) use ($user) {
        if ( count($entity->getLinks() ) == 0 ) {
          return false;
        }
        return $this->isGranted('ROLE_ADMIN') || $entity->getUser()->getId() == $user->getId();
      }
    ]);

    $query = $this->getTableQuery($request, $user);

    if ($asQuery) {
      return $query;
    }
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $compaignsRepo = $this->getDoctrine()->getRepository(Compaign::class);
    $query = $compaignsRepo->createQueryBuilder('c');
    if (!$this->isGranted('ROLE_ADMIN')) {
      $params['user_id'] = $user->getId();
      $query->andWhere('c.user_id = :user_id');
    }
    // search params
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['c.name']);
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
      $entity = $this->getDoctrine()->getRepository(Compaign::class)->find($id);
    } else {
      $entity = new Compaign();
    }
    $form = $this->createForm(CompaignType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('compaigns.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request)
  {
    return $this->createForm(CompaignSearchType::class, null, [
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

}
