<?php
namespace App\Form\Search;

use App\Entity\Media;
use App\Entity\Country;
use App\Entity\Interest;
use App\Entity\GeographicalSystem;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class MediaSearchType extends AbstractType
{

  private $security;

  public function __construct(Security $security)
  {
    $this->security = $security;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

    $country = $category = $interest = $geographicalSystems = null;
    if ($options['cid']) {
      $country = $options['em']->getRepository(Country::class)->find($options['rid']);
    }
    if ($options['iid']) {
      $interest = $options['em']->getRepository(Interest::class)->find($options['iid']);
    }
    if ($options['gid']) {
      $geographicalSystems = $options['em']->getRepository(GeographicalSystem::class)->find($options['gid']);
    }
    if ($options['cat_id']) {
      $category = $options['cat_id'];
    }
     
    $builder->add('q', TextType::class, [
      'label' => 'Key words',
      'mapped' => false,
      'required' => false
    ]);

    $builder->add('cat_id', ChoiceType::class, [
                 'choices' => array_flip(Media::CATEGORIES),
                 'mapped' => false,
                 'label' => 'Category',
                 'required' => false,
                 'data' => $category,
                'attr' => ['style' => 'display: flex;']
              ]);
    
      $builder->add('cid', EntityType::class, [
        'label' => 'Country',
        'mapped' => false,
        'required' => false,
        'group_by' => 'continentName',
        'class' => Country::class,
        'data' => $country
      ]);

      $builder->add('iid', EntityType::class, [
        'label' => 'Interest',
        'mapped' => false,
        'required' => false,
        'class' => Interest::class,
        'data' => $interest
      ]);

      $builder->add('gid', EntityType::class, [
        'label' => 'Geographical system',
        'mapped' => false,
        'required' => false,
        'class' => GeographicalSystem::class,
        'data' => $geographicalSystems
      ]);
       
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('user');
    $resolver->setRequired('cid');
    $resolver->setRequired('iid');
    $resolver->setRequired('gid');
     $resolver->setRequired('cat_id');
  }
  
  public function getBlockPrefix() {
    return '';
  }

}
