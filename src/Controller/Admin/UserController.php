<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Entity\User;
use App\Form\UserType;
use App\Service\Table;
use App\Controller\BaseController;
use App\Form\Search\UserSearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends BaseController
{

  /**
   * @Route(methods={"GET"}, path="/admin/users", name="users")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Request $request, UserInterface $user, Table $table)
  {
    return $this->render('admin/user/index.html.twig', [
      'table' => $this->getTable($request, $user, $table),
      'search_form' => $this->getSearchForm($request, $user)->createView()
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/users/table", name="users.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Request $request, UserInterface $user, Table $table)
  {
    return new Response($this->getTable($request, $user, $table));
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/{id}/details", name="user.details")
   */
  public function details(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $user_id = $request->get('id');
    $user = $this->getDoctrine()->getRepository(User::class)->findById($user, $user_id);
    if (!$user) return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
      'title' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ])
    ]);
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("User details"),
        'body' => $this->renderView('admin/user/details.html.twig', [
          'user' => $user
        ])
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/create", name="user.create")
   * @IsGranted("ROLE_ADMIN")
   */
  public function create(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Add user"),
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/user/{id}/update", name="user.update")
   * @IsGranted("ROLE_ADMIN")
   */
  public function update(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    if ($user->getId() == $request->get('id')) {
      $title = $translator->trans("My account");
    } else {
      $title = $translator->trans("Edit user");
    }
    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $title,
        'form' => $this->getForm($request, $user)->createView()
      ])
    ]);
  }

  /**
   * @Route(methods={"POST"}, path="/admin/user/{id}/store", name="user.store", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function store(
    Request $request, 
    UserInterface $user, 
    TranslatorInterface $translator, 
    UserPasswordHasherInterface $passwordHasher
  ) {
    // validate form data
    $form = $this->getForm($request, $user);
    if (!$form->isValid()) {
      return $this->json([
        'status' => 'error',
        'message' => (string) $form->getErrors(true, false)
      ]);
    }
    $entity = $form->getData();
    $isNew = !$entity->getId();
    $em = $this->getDoctrine()->getManager();
    $userRepo = $em->getRepository(User::class);
    $isOwner = $user->getId() == $entity->getId();
    // check if can update
    if (!$isNew && !$isOwner && !$this->isGranted('ROLE_ADMIN')) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Vous n'avez pas la permission d'executer cette action")
      ]);
    }
    // check if password matches
    $password = $form['password']->getData();
    $confirm_password = $form['confirm_password']->getData();
    if (
      ($isNew && empty($password)) || 
      (!empty($password) && $password != $confirm_password)
    ) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Les deux mots de passe ne sont pas identiques")
      ]);
    }
    // check if email already in use
    if ($userRepo->exists($entity)) {
      return $this->json([
        'status' => 'error',
        'message' => $translator->trans("Cet utilisateur est déjà existe")
      ]);
    }
    // hash password
    if (!empty($password)) {
      $entity->setPassword($passwordHasher->hashPassword($entity, $password));
    }
    // set role
    if (isset($form['role_name'])) {
      $entity->setRoles(['ROLE_'. strtoupper($form['role_name']->getData())]);
    }
    $em->persist($entity);
    $em->flush();
    // log activity
    if ($isNew) {
      $action_name = 'create';
    } else if (!empty($password)) {
      $action_name = 'password';
    } else {
      $action_name = 'update';
    }
    $em->getRepository(Log::class)->store(
      $user->getId(),
      $entity->getId(),
      'user',
      $action_name
    );
    // response message
    if ($isOwner) {
      $message = $translator->trans("Votre compte a bien été mis à jour");
    } else {
      $message = $translator->trans("L'utilisateur a bien été sauvegardée");
    }
    return $this->json([
      'tableId' => 'users',
      'status' => 'success',
      'message' => $message
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/user/{id}/delete", name="user.delete", defaults={"id"=0})
   * @IsGranted("ROLE_ADMIN")
   */
  public function delete(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $em = $this->getDoctrine()->getManager();
    $logRepo = $em->getRepository(Log::class);
    $userRepo = $em->getRepository(User::class);
    $items = $request->get('items', [$request->get('id', 0)]);

    $users = $userRepo->createQueryBuilder('u')
      ->leftJoin(Reservation::class, 'r', 'WITH', 'u.id = r.user_id')
      ->where('u.id IN(:items)')
      ->andWhere('a.id IS NULL')
      ->andWhere('p.id IS NULL')
      ->setParameter('items', $items)
      ->getQuery()
      ->getResult();

    $user_id = $user->getId();
    foreach ($users as $user) {
      $em->remove($user);
      $logRepo->store($user_id, $user->getId(), 'user', 'delete');
    }
    $em->flush();

    return $this->json([
      'tableId' => 'users',
      'status'  => count($users) > 0 ? 'success' : 'info',
      'message' => $translator->trans("%count% utilisateur(s) supprimé(s)", [
        '%count%' => count($users)
      ])
    ]);
  }

  private function getTable($request, $user, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('company', 'Company', ['sortable' => true]);
    $table->addColumn('prenom', 'First name', ['sortable' => true]);
    $table->addColumn('nom', 'Last name', ['sortable' => true]);
    $table->addColumn('email', 'Email', ['sortable' => true]);
    $table->addColumn('role', 'Role', [
      'sortable' => true,
      'render' => function($entity) {
        $label = $entity->getRoleLabel();
        return "<span class='badge bg-dark'>{$label}</span>";
      }
    ]);
    $table->addColumn('status', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        switch($entity->getStatus()) {
          case 'active':
            $class = 'success';
            break;
          case 'inactive':
            $class = 'warning text-dark';
            break;
          default:
            $class = 'secondary';
            break;
        }
        $label = $entity->getStatusLabel();
        return "<span class='badge bg-{$class}'>{$label}</span>";
      }
    ]);
    $table->setPrimaryKey('id');
    $table->setOrder('u.nom', 'asc');
    $table->addAction('edit', [
      'type'  => 'modal',
      'label' => 'Modifier',
      'icon'  => 'bi bi-pencil-square',
      'route' => '/admin/user/[id]/update'
    ]);
    $table->addAction('details', [
      'type'  => 'modal',
      'label' => 'Détails',
      'icon'  => 'bi bi-list-stars',
      'route' => '/admin/user/[id]/details'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/user/[id]'
    ]);
    /*$table->addDivider();
    $table->addAction('delete', [
      'type'  => 'modal',
      'label' => 'Supprimer',
      'icon'  => 'bi bi-trash',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/user/{$id}/delete";
      },
      'bulk_action' => true
    ]);*/
    $query = $this->getTableQuery($request, $user);
    
    return $table->render($query);
  }

  private function getTableQuery($request, $user)
  {
    $params = [];
    $userRepo = $this->getDoctrine()->getRepository(User::class);
    $query = $userRepo->createQueryBuilder('u');

    //Filtre par société
    //$params['societe_id'] = $user->getSociete()->getId();
    //$query->andWhere('u.societe_id = :societe_id');

    // search params
    $keywords = $request->get('q');
    $societe_id = $request->get('sid');
    $direction_id = $request->get('did');
    $status = $request->get('status');
    $role = $request->get('role');

    if ($keywords) {
      $result = Base::getParamsAndClausesFromKeywords($keywords, ['u.nom', 'u.prenom', 'u.email', 'u.matricule']);
      $params = array_merge($params, $result['params']);
      $query->andWhere($result['clauses']);
    }
 
    if ($societe_id) {
      $params['societe_id'] = $societe_id;
      $query->andWhere('u.societe_id = :societe_id');
    }
    if ($direction_id) {
      $params['direction_id'] = $direction_id;
      $query->andWhere('u.direction_id = :direction_id');
    }
    if ($role) {
      $params['role'] = '%role_'.$role.'%';
      $query->andWhere('u.roles LIKE :role');
    }
    if ($status) {
      $params['status'] = $status;
      $query->andWhere('u.status = :status');
    }

    $query->setParameters($params);

    return $query;
  }

  private function getSearchForm($request, $user)
  {
    return $this->createForm(UserSearchType::class, null, [
      'role' => $request->get('role'),
      'user' => $user,
      'method' => 'GET',
      'csrf_protection' => false,
      'em'  => $this->getDoctrine()->getManager()
    ])->handleRequest($request);
  }

  private function getForm($request, $user)
  {
    $id = $request->get('id', 0);
    if ($id > 0) {
      $entity = $this->getDoctrine()->getRepository(User::class)->find($id);
    } else {
      $entity = new User();
    }
    $form = $this->createForm(UserType::class, $entity, [
      'user' => $user,
      'action' => $this->generateUrl('user.store', ['id' => $id])
    ]);
    return $form->handleRequest($request);
  }

}
