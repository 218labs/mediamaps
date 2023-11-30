<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Service\Table;
use App\Entity\Media;
use App\Entity\MediaInterest;
use App\Entity\MediaLanguages;
use App\Entity\Interest;
use App\Entity\MediaGeographicalSystem;
use App\Entity\MediaSocialNetwork;
use App\Form\MediaType;
use App\Entity\MailHistory;
use Symfony\Component\Uid\Uuid;
use App\Controller\BaseController;
use App\Form\Search\MediaSearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use App\Repository\MediaInterestRepository;
use App\Repository\MediaLanguagesRepository;
use App\Repository\MediaGeographicalSystemRepository;
use App\Repository\MediaSocialNetworkRepository;

use App\Form\MediaInterestType;
use App\Form\MediaLanguagesType;
use App\Form\MediaGeographicalSystemType;
use App\Form\MediaSocialNetworkType;
use LanguageDetection\Language;

use Abraham\TwitterOAuth\TwitterOAuth;


class MediaController extends BaseController
{
    private $mediaInterestRepo;
    private $mediaLanguagesRepo;
    private $mediaGeographicalSystemRepo;
    private $mediaSocialNetworkRepo;

    public function __construct(MediaInterestRepository $mediaInterest, MediaLanguagesRepository $mediaLanguages, MediaGeographicalSystemRepository $mediaGeographicalSystem, MediaSocialNetworkRepository $mediaSocialNetwork)
    {
        $this->mediaInterestRepo = $mediaInterest;
        $this->mediaLanguagesRepo = $mediaLanguages;
        $this->mediaGeographicalSystemRepo = $mediaGeographicalSystem;
        $this->mediaSocialNetworkRepo = $mediaSocialNetwork;
    }

   /**
   * @Route(methods={"GET"}, path="/admin/media", name="media")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/media/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/media/table", name="media.table")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/media/export", name="media.export")
   */
  public function export(Request $request, UserInterface $user, TranslatorInterface $translator, Table $table)
  {
    $format = $request->get('format', 'xlsx');
    $query = $this->getTable($request, $user, $table, true);
    $filename = $translator->trans("Liste des media %date%", ['date' => date('d-m-Y Hi')]);
    return $table->export($query, $filename, $format);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/media/{id}/details", name="media.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $media = $this->getDoctrine()->getRepository(Media::class)->find($id);

    if (!$media) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);

    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Media details"),
        'body' => $this->renderView('admin/media/details.html.twig', [
          'media' => $media
        ])
      ])
    ]);
    
  }

  /**
   * @Route(methods={"GET"}, path="/admin/media/create", name="media.create")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->render('admin/media/form.html.twig', [
      'entity' => null,
      'form' => $this->getForm($request, $user)->createView(),
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/media/{id}/update", name="media.update")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');

    $form = $this->getForm($request, $user);
    $entity = $form->getData();

    return $this->render('admin/media/form.html.twig', [
      'entity' => $entity,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/media/{id}/store", name="media.store", defaults={"id"=0})
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
    $entity = $form->getData();
    $logo = $request->get('logo');
    if (isset($logo[0]) && !empty($logo[0])) {
      $entity->setFileName($logo[0]);
    } else {
      $entity->setFileName('');
    }

    if ( $entity->getParent() ){
      if ( empty($entity->getLogo()) ) $entity->setLogo($entity->getParent()->getLogo());
      ///if ( $entity->getVisitorsCount()  ) $entity->setVisitorsCount($entity->getParent()->getVisitorsCount());
    }

    /*if ( !empty($entity->getWebsite()) && strpos($entity->getWebsite(), 'twitter.com')!== false ){
      //set twitter folowers count
      $consumerKey = $_ENV['CONSUMER_KEY'];
      $consumerSecret = $_ENV['CONSUMER_SECRET'];
      $accessToken = $_ENV['ACCESS_TOKEN'];
      $accessTokenSecret = $_ENV['ACCESS_TOKEN_SECRET'];
      
      $parse = parse_url($entity->getWebsite());
      $website = $parse["host"];

      
       
      if( $parse['host'] == 'twitter.com') {
        $pattern = "/twitter.com\/([a-zA-Z0-9_]{1,15})/";

        // Extract the username from the URL using preg_match
        preg_match($pattern, $entity->getWebsite(), $matches);

        if (isset($matches[1])) $username = $matches[1];
           
        
        if ( !empty($username) ){
          $twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

          $twitter_user = $twitter->get('users/show', ['screen_name' => $username]);

          if ($twitter->getLastHttpCode() === 200) {
            $followersCount = $twitter_user->followers_count;
            echo $followersCount ;exit;
            $entity->setVisitorsCount($followersCount);
          }
        }
      
      }
    }*/
    

    $em->persist($entity);
    $em->flush();
    
    $interests = isset($_POST['media']['interests']) ? $_POST['media']['interests'] : [];
    $this->mediaInterestRepo->storeInterests($entity, $interests);
     
    /*$languages = isset($_POST['media']['languages']) ? $_POST['media']['languages'] : [];
    $this->mediaLanguagesRepo->storeLanguages($entity, $languages); */ 

    $gss = isset($_POST['media']['geographicalSystems']) ? $_POST['media']['geographicalSystems'] : [];
    $this->mediaGeographicalSystemRepo->storeGeographicalSystems($entity, $gss); 

    //$this->mediaSocialNetworkRepo->storeSocialNetworks($entity, $_POST['media']);  
    
    $em->getRepository(Log::class)->store($user->getId(), $entity->getId(), 'media', 'update');

    return $this->json([
      'tableId' => 'media',
      'status' => 'success',
      'message' => $translator->trans("Media saved")
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/media/{id}/delete", name="media.delete", defaults={"id"=0})
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $items = $request->get('items', [$request->get('id', 0)]);

    $this->getDoctrine()->getRepository(Media::class)
      ->createQueryBuilder('m')
      ->where('m.id IN(:items)')
      ->setParameter('items', $items)
      ->delete()
      ->getQuery()
      ->execute();

    if (count($items) > 1) {
      $message = $translator->trans("medias deleted");
    } else {
      $message = $translator->trans("media deleted");
    }

    // log activity
    $user_id = $user->getId();
    $logRepo = $this->getDoctrine()->getRepository(Log::class);
    foreach($items as $entity_id) {
      $logRepo->store($user_id, $entity_id, 'media', 'delete');
    }

    return $this->json([
      'tableId' => 'media',
      'status'  => 'success',
      'message' => $message
    ]);
  }

  private function getTable($request, $user, $table, $asQuery = false)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('category', 'Category', ['sortable' => true]);
    $table->addColumn('name', 'Name', [
      'sortable' => true,
      'render' => function ($entity) {
          $id = $entity->getId();
          $name = $entity->getName();
          return "<a target='_blank' href='/admin/media/{$id}/update' class='pointer'>{$name}</a>";
      }
    ]);
    $table->addColumn('website', 'Website', ['sortable' => true]);
    $table->addColumn('country', 'Country', ['sortable' => true]);
    $table->addColumn('language', 'Language', ['sortable' => true]);
    $table->addColumn('image', 'Logo', [
      'sortable' => true,
      'render' => function($entity) {
        $image = $entity->getImage();
        $name = $entity->getName();
        if ( empty($entity->getLogo())) return '';
        return "<img src='{$image}' alt='{$name}' height='60'>";
      }
    ]);

    $table->addColumn('visitorsCount', 'visitors count', ['sortable' => true]);
    

    $table->setPrimaryKey('id');
    $table->setOrder('m.id', 'DESC');
    //edit dans une nouvelle fenetre 
    //retour à la même page
    //redondance version mobile 


    $table->addAction('edit', [
      'label' => 'Edit',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/media/[id]/update'
    ]);
    $table->addAction('details', [
      'type'  => 'modal',
      'label' => 'Detail',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/media/[id]/details'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'History',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/media/[id]'
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
    $visiteurRepo = $this->getDoctrine()->getRepository(Media::class);
    $query = $visiteurRepo->createQueryBuilder('m');
    $query->andWhere('m.parentId IS NULL');

    // search params
    $status = $request->get('status');
    $country_id = $request->get('cid');
    $category_id = $request->get('cat_id');
    $keywords = $request->get('q');
    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['m.name, m.website, m.email, m.telephone, m.category, m.contact']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }
    if ($country_id) {
      $params['country_id'] = $country_id;
      $query->andWhere('m.countryId = :country_id');
    }
    if ($category_id) {
      $params['category_id'] = $category_id;
      $query->andWhere('m.category = :category_id');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(Media::class)->find($id);
    } else {
      $entity = new Media();
    }
    $form = $this->createForm(MediaType::class, $entity, [
      //'user' => $user,
      'action' => $this->generateUrl('media.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

  private function getSearchForm($request, $user)
  {
    return $this->createForm(MediaSearchType::class, null, [
      'cid' => $request->get('cid'),
      'iid' => $request->get('iid'),
      'gid' => $request->get('gid'),
      'cat_id' => $request->get('cat_id'),
      'user' => $user,
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }
  

  /**
   * @Route(path="/admin/media/search", name="media.search", methods={"GET"})
   */
  public function search(Request $request)
  {
    $keywords = $request->get('keywords');
    if (empty($keywords)) return $this->json(['visiteurs' => []]);

    $visiteurs = $this->getDoctrine()->getRepository(Media::class)
      ->createQueryBuilder('v')
      ->select('DISTINCT v.email')
      ->where('v.email LIKE :keywords')
      ->setParameter('keywords', "%{$keywords}%")
      ->getQuery()
      ->getResult();

    return $this->json([
      'visiteurs' => array_column($visiteurs, 'email')
    ]);
  }

  /**
   * @Route(path="/admin/media/stats", name="media.stats", methods={"GET"})
   */

  public function getWebsiteStats(){
        
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.similarweb.com/v1/website/%7Bdomain.com%7D/total-traffic-and-engagement/visits?api_key=similarweb_api_key&start_date=2020-01&end_date=2020-03&country=gb&granularity=monthly&main_domain_only=false&format=json&show_verified=false&mtd=false', [
  'headers' => [
    'accept' => 'text/plain',
  ],
]);

echo $response->getBody();
    }

 

}
