<?php

namespace App\Form\Search;

use App\Entity\User;
use App\Entity\Salle;
use App\Helpers\Base;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ReservationSearchType extends AbstractType
{

  private $security;

  public function __construct(Security $security)
  {
    $this->security = $security;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $salle = $user = null;
    $current_user = $options['user'];

    $sid = $options['request']->get('sid');
    $uid = $options['request']->get('uid');
    $du = $options['request']->get('du');
    $au = $options['request']->get('au');
    $status = $options['request']->get('status');
    $source = $options['request']->get('source');

    if ($sid) $salle = $options['em']->getRepository(Salle::class)->find($sid);
    if ($uid) $user = $options['em']->getRepository(User::class)->find($uid);

    $builder->add('sid', EntityType::class, [
      'label' => 'Salle',
      'mapped' => false,
      'required' => false,
      'class' => Salle::class,
      'data' => $salle
    ]);
    if ($this->security->isGranted('ROLE_ADMIN')) {
      $builder->add('uid', EntityType::class, [
        'label' => 'Utilisateur',
        'mapped' => false,
        'required' => false,
        'class' => User::class,
        'group_by' => 'societe',
        'data' => $user,
        'choices' => $current_user->getSociete()->getUsers(),
      ]);
    }

    $builder->add('du', DateType::class, [
      'label' => 'Date de début',
      'html5' => true,
      'mapped' => false,
      'required' => false,
      'widget' => 'single_text',
      'data' => $du ? new \DateTime($du) : null
    ]);

    $builder->add('au', DateType::class, [
      'label' => 'Date de fin',
      'html5' => true,
      'mapped' => false,
      'required' => false,
      'widget' => 'single_text',
      'data' => $au ? new \DateTime($au) : null
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Reservation::STATUS),
      'data' => $status
    ]);

    $builder->add('source', ChoiceType::class, [
      'label' => "Source",
      'mapped' => false,
      'required' => false,
      'choices'  => Base::arrayCombine(Reservation::SOURCES),
      'data' => $source
    ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('user');
    $resolver->setRequired('request');
  }

  public function getBlockPrefix()
  {
    return '';
  }
}
