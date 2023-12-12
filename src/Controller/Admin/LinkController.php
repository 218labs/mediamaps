<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Service\Table;
use App\Entity\Link;
use App\Entity\Media;
use App\Entity\Language;
use App\Form\LinkType;
use App\Entity\MailHistory;
use Symfony\Component\Uid\Uuid;
use App\Controller\BaseController;
use App\Form\Search\LinkSearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use LanguageDetection\Language as Lang;
use Screen\Capture;

class LinkController extends BaseController
{
   /**
   * @Route(methods={"GET"}, path="/admin/links", name="link")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/link/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }


  /**
   * @Route(methods={"GET"}, path="/admin/links/check", name="check")
   */
  public function check(Request $request, UserInterface $user, Table $table)
  {
    $em = $this->getDoctrine()->getManager();
    $links = $this->getDoctrine()->getRepository(Link::class)->findAll();
    $i = 0;
    foreach ($links as $entity) {
      $domain =  $entity->extractDomain();
      $entity->setDomain($domain);
      $em->persist($entity);
      $em->flush();
      $i++;
    }
   
    echo $i .  ' links updated';
    exit;

    
    $mediaRepo = $em->getRepository(Media::class);
    $langRepo = $em->getRepository(Language::class);

    foreach ($links as $entity) {
      if ( $entity->getId() < 1402 && empty($entity->getLanguage())  ){
        $media = $entity->getMedia();
        if ( isset($media) && !$media->getLanguage() ){
          $entity->setLanguage($media->getLanguage());
          $em->persist($entity);
        }
      }
    }
    $em->flush();

    exit;

     foreach ($links as $entity) {
       if ( $entity->getId() > 1402  ){
        echo $entity->getId() . '::' . $entity->getLink().'<br />';
        //set language
        $lang = '';
        if ( !empty($entity->getTitle()) ){
         $ld = new Lang;
         $lang =  $ld->detect($entity->getTitle());

         $entity->setLang($lang);
        }
     
    $username = '';
    //add the media if not exists
    if ( !empty( $entity->getLink() )  ){
      $parse = parse_url($entity->getLink());
      $website = isset($parse["host"]) ?  $parse["host"] : '';

      if( !empty($website) && $parse['host'] !== 'www.twitter.com') {
        $pattern = "/twitter.com\/([a-zA-Z0-9_]{1,15})/";

        // Extract the username from the URL using preg_match
        preg_match($pattern, $entity->getLink(), $matches);

        if (isset($matches[1])) {
          $username = $matches[1]; 
        }
      }

      $language = $langRepo->store($user, $lang);
      $entity->setLanguage($language);

      $media = $mediaRepo->store($user, $website, $username);
      $entity->setMedia($media);
    }


    $em->persist($entity);
    $em->flush();


       }
     }


     exit;
  }

  /**
   * @Route(methods={"GET"}, path="/admin/links/table", name="link.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/links/export", name="link.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("List of links %date%", ['date' => date('d-m-Y Hi')]);
    return $table->export($query, $filename, $format);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/links/{id}/details", name="link.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $link = $this->getDoctrine()->getRepository(Link::class)->findById($user, $id);

    if (!$link) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Link not found")
      ])
    ]);
    //dd($link);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Link details"),
        'body' => $this->renderView('admin/link/details.html.twig', [
          'link' => $link
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/links/{id}/screen", name="link.screen")
   */
  public function screen(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $link = $this->getDoctrine()->getRepository(Link::class)->findById($user, $id);

    $url = $link->getLink();
    $screenCapture = new Capture($url);
    $screenCapture->setWidth(1200);
    $screenCapture->setHeight(800);
    $screenCapture->setImageType('png');
    dd($screenCapture);
    $fileLocation = '/Users/a.maghlaoui/Sites/rasd/public/uploads/screens';
    $screenCapture->save($fileLocation); // Will automatically determine the extension type

    echo $screenCapture->getImageLocation();
    exit;

  }

  /**
   * @Route(methods={"GET"}, path="/admin/links/create", name="link.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->render('admin/link/form.html.twig', [
      'entity' => null,
      'form' => $this->getForm($request, $user)->createView(),
    ]);

  }

  /**
   * @Route(methods={"GET"}, path="/admin/links/{id}/update", name="link.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $link = $this->getDoctrine()->getRepository(Link::class)->findById($user, $id);
    if (!$link) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Link not found")
      ])
    ]);

    $form = $this->getForm($request, $user);
    $entity = $form->getData();

    return $this->render('admin/link/form.html.twig', [
      'entity' => $entity,
      'form' => $form->createView(),
    ]);

    
  }

  /**
   * @Route(methods={"POST"}, path="/admin/links/{id}/store", name="link.store", defaults={"id"=0})
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
    $em = $this->getDoctrine()->getManager();
    $mediaRepo = $em->getRepository(Media::class);
    $langRepo = $em->getRepository(Language::class);
    
    //update counters
    $entity = $form->getData();
    $file_name = $request->get('file_name');

    //set language
    $ld = new Lang;
    $lang =  $ld->detect($entity->getTitle());

    $entity->setLang($lang);

    if (isset($file_name[0]) && !empty($file_name[0])) {
      $entity->setFileName($file_name[0]);
    } else {
      $entity->setFileName('');
    }
    $username = '';
    //add the media if not exists
    if ( !empty( $entity->getLink() )  ){
      $website =  $entity->extractDomain();
      $entity->setDomain($website);

      if( !empty($website) && $website == 'twitter.com') {
        $pattern = "/twitter.com\/([a-zA-Z0-9_]{1,15})/";

        // Extract the username from the URL using preg_match
        preg_match($pattern, $entity->getLink(), $matches);

        if (isset($matches[1])) {
          $username = $matches[1]; 
        }
      }

      $language = $langRepo->store($user, $lang);
      $entity->setLanguage($language);

      $media = $mediaRepo->store($user, $website, $username);
      $entity->setMedia($media);
    }

    if ( !$entity->getUser() ) $entity->setUser($user);


    /*$compaign = $entity->getCompaign();
    $compaign->setLinksCount( count($compaign->getLinks()) );
    $em->persist($compaign);*/

    $em->persist($entity);
    $em->flush();

    $em->getRepository(Log::class)->store($user->getId(), $entity->getId(), 'link', 'update');

    return $this->json([
      'tableId' => 'link',
      'status' => 'success',
      'message' => $translator->trans("Link saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/links/{id}/delete", name="link.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Link::class)
      ->createQueryBuilder('l')
      ->where('l.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("links deleted");
    } else {
      $message = $translator->trans("link deleted");
    }

    // log activity
    $user_id = $user->getId();
    $logRepo = $this->getDoctrine()->getRepository(Log::class);
    foreach($items as $entity_id) {
      $logRepo->store($user_id, $entity_id, 'link', 'delete');
    }

    return $this->json([
      'tableId' => 'link',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table, $asQuery = false)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('media', 'Media', ['sortable' => true]);
    $table->addColumn('category', 'Category', ['sortable' => true]);
    $table->addColumn('media.language', 'Language', [
      'sortable' => true,
      'render' => function ($entity) {
        //if image show the image
          return $entity->getLanguage();
      }
    ]);
    $table->addColumn('title', 'Title', [
      'sortable' => true,
      'render' => function ($entity) {
        //if image show the image
        if ( !empty($entity->getLink()) && filter_var($entity->getLink(), FILTER_VALIDATE_URL) !== false ){
          return '<a target="_blank" href="'.$entity->getLink().'">'.$entity->getTitle().'</a>';
        }
        else{
          return $entity->getTitle();
        }
      }
    ]);
    if ($asQuery) {
    $table->addColumn('link', 'Link', ['sortable' => true]);
    }
    $table->addColumn('category', 'Category', ['sortable' => true]);
    $table->addColumn('geographical_scope', 'Geo scope', ['sortable' => true]);
    $table->addColumn('publishedOn', 'Date', ['sortable' => true, 
      'render' => function ($entity) {
        return !empty($entity->getPublishedOn()) ? $entity->getPublishedOn()->format('d/m/Y') : '';
      }
    ]);

    $table->setPrimaryKey('id');
    $table->setOrder('l.id', 'DESC');
     
    $table->addAction('edit', [
      'label' => 'Edit',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/links/[id]/update'
    ]);
    $table->addAction('details', [
      'type'  => 'modal',
      'label' => 'Detail',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/links/[id]/details'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'History',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/link/[id]'
    ]);

    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Delete',
      'icon'  => 'bi bi-x-lg',
      'confirm' => true,
      'route' => '/admin/links/[id]/delete',
      'display' => function ($entity) use ($user) {
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
    $visiteurRepo = $this->getDoctrine()->getRepository(Link::class);
    $query = $visiteurRepo->createQueryBuilder('l')
                          ->join(Media::class, 'm', 'WITH', 'l.media_id = m.id');
    if (!$this->isGranted('ROLE_ADMIN')) {
      $params['user_id'] = $user->getId();
      $query->andWhere('l.user_id = :user_id');
    }
    // search params
    $status = $request->get('status');
    $category_id = $request->get('category_id');
    $compaign_id = $request->get('compaign_id');
    $language_id = $request->get('language_id');
    $media_id = $request->get('media_id');
    $country_id = $request->get('country_id');
    $orientation = $request->get('orientation');

    $geographical_scope = $request->get('geographical_scope');
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['l.title, l.link']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }
    if ($category_id) {
      $params['category_id'] = $category_id;
      $query->andWhere('l.category_id = :category_id');
    }
    if ($compaign_id) {
      $params['compaign_id'] = $compaign_id;
      $query->andWhere('l.compaign_id = :compaign_id');
    }
    if ($media_id) {
      $params['media_id'] = $media_id;
      $query->andWhere('l.media_id = :media_id');
    }
    if ($language_id) {
      $params['language_id'] = $language_id;
      $query->andWhere('l.language_id = :language_id');
    }
    if ($country_id) {
      $params['country_id'] = $country_id;
      $query->andWhere('m.countryId = :country_id');
    }
    if ($orientation) {
      $params['orientation'] = $orientation;
      $query->andWhere('l.orientation = :orientation');
    }
    if ($geographical_scope) {
      $params['geographical_scope'] = $geographical_scope;
      $query->andWhere('l.geographical_scope = :geographical_scope');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Link::class)->find($id);
    } else {
      $entity = new Link();
    }
    $form = $this->createForm(LinkType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('link.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request, $user)
  {
    return $this->createForm(LinkSearchType::class, null, [
      'category_id' => $request->get('category_id'),
      'compaign_id' => $request->get('compaign_id'),
      'media_id' => $request->get('media_id'),
      'language_id' => $request->get('language_id'),
      'country_id' => $request->get('country_id'),
      'geographical_scope' => $request->get('geographical_scope'),
      'orientation' => $request->get('orientation'),
      'user' => $user,
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

   
}
