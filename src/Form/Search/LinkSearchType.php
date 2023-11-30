<?php
namespace App\Form\Search;

use App\Entity\Category;
use App\Entity\Compaign;
use App\Entity\Link;
use App\Entity\Media;
use App\Entity\Language;
use App\Entity\Country;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class LinkSearchType extends AbstractType
{
  
  private $security;

    public function __construct(Security $security)
    {
      $this->security = $security;
    }


  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $category = $compaign = $media = $language = $country = null;
    $current_user = $options['user'];

    if ($options['compaign_id']) {
      $compaign = $options['em']->getRepository(Compaign::class)->find($options['compaign_id']);
    }
    if ($options['category_id']) {
      $category = $options['em']->getRepository(Category::class)->find($options['category_id']);
    }
    if ($options['media_id']) {
      $media = $options['em']->getRepository(Media::class)->find($options['media_id']);
    }
    if ($options['language_id']) {
      $language = $options['em']->getRepository(Language::class)->find($options['language_id']);
    }

     if ($options['country_id']) {
      $country = $options['em']->getRepository(Country::class)->find($options['country_id']);
    }

    $builder->add('q', TextType::class, [
      'label' => 'Key words',
      'mapped' => false,
      'required' => false
    ]);
    $builder->add('category_id', EntityType::class, [
        'label' => 'Category',
        'mapped' => false,
        'required' => false,
        'class' => Category::class,
        'data' => $category
      ]);

    $builder->add('media_id', EntityType::class, [
        'label' => 'Media',
        'mapped' => false,
        'required' => false,
        'class' => Media::class,
        'data' => $media
      ]);

    $builder->add('language_id', EntityType::class, [
        'label' => 'Language',
        'mapped' => false,
        'required' => false,
        'class' => Language::class,
        'data' => $language
      ]);

    $builder->add('country_id', EntityType::class, [
        'label' => 'Country',
        'mapped' => false,
        'required' => false,
        'class' => Country::class,
        'data' => $country
      ]);

    if ( !$this->security->isGranted('ROLE_ADMIN') ) {
          $compaigns = $current_user->getCompaigns();
          $builder->add('compaign_id', EntityType::class, [
          'class' => Compaign::class,
          'label' => 'Compaign',
          'required' => false,
          'choices' => $compaigns,
          'data' => $compaign
          ]);
        }
        else{
            $builder->add('compaign_id', EntityType::class, [
                'class' => Compaign::class,
                'label' => 'Compaign',
                'required' => false,
             ]);
            
        }

      $builder->add('geographical_scope', ChoiceType::class, [
                'choices' => array_flip(Link::GEOGRAPHICAL_SCOPE),
                'mapped' => false,
                'label' => 'geographical scope',
                'required' => false,
                'data' => isset($options['geographical_scope']) ? $options['geographical_scope'] : ''
              ]);
      $builder->add('orientation', ChoiceType::class, [
                'choices' => array_flip(Link::ORIENTATION),
                'mapped' => false,
                'required' => false,
                'data' => isset($options['orientation']) ? $options['orientation'] : ''
              ]);

  
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('user');
    $resolver->setRequired('category_id');
    $resolver->setRequired('compaign_id');
    $resolver->setRequired('media_id');
    $resolver->setRequired('language_id');
    $resolver->setRequired('country_id');
    $resolver->setRequired('geographical_scope');
    $resolver->setRequired('orientation');
  }

  public function getBlockPrefix() {
    return '';
  }

}
