<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UserType extends AbstractType
{

  private $security;

  public function __construct(Security $security)
  {
    $this->security = $security;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $user = $builder->getData();
    $isNew = $user->getId() < 1;

    $builder->add('company', TextType::class, [
      'label' => "Company name",
      'required' => false,
    ]);
    
    $builder->add('prenom', TextType::class, [
      'label' => "First name"
    ]);
    $builder->add('nom', TextType::class, [
      'label' => "Last name"
    ]);

   
    if ( ($isNew || $this->security->isGranted('ROLE_ADMIN')) && $user->getId() != $options['user']->getId() ) {
      
      $builder->add('status', ChoiceType::class, [
        'label' => "Status",
        'placeholder' => '',
        'choices'  => array_flip(User::STATUS)
      ]);
      $builder->add('role_name', ChoiceType::class, [
        'label' => "Role",
        'mapped' => false,
        'placeholder' => '',
        'data' => !$isNew ? $user->getRoleName() : '',
        'choices'  => array_flip(User::ROLES)
      ]);
    }
    $builder->add('email', TextType::class, [
      'label' => "Email"
    ]);
    $builder->add('password', PasswordType::class, [
      'label' => "Password",
      'mapped' => false,
      'required' => $isNew,
      'help' => !$isNew ? 'Remplissez ce champs pour changer le mot de passe' : '',
    ]);
    $builder->add('confirm_password', PasswordType::class, [
      'label' => "Password confirmation",
      'mapped' => false,
      'required' => $isNew
    ]);
  }
  
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setDefaults([
      'data_class' => User::class
    ]);
  }
}
