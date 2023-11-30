<?php
namespace App\Form\Search;

use App\Entity\Direction;
use App\Entity\User;
use App\Entity\Societe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserSearchType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $user = $options['user'];

    $builder->add('q', TextType::class, [
      'label' => 'Key words',
      'mapped' => false,
      'required' => false
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => 'Status',
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(User::STATUS)
    ]);

    $builder->add('role', ChoiceType::class, [
      'label' => 'Role',
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(User::ROLES)
    ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('role');
    $resolver->setRequired('user');
  }

  public function getBlockPrefix() {
    return '';
  }

}
