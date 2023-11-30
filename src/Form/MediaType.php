<?php

namespace App\Form;

use App\Entity\Media;
use App\Entity\Interest;
use App\Entity\Country;
use App\Entity\Language;
use App\Entity\GeographicalSystem;
use App\Entity\MediaSocialNetwork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Form\Type\AjaxUploadType;
use App\Form\Type\FieldsetType;



use App\Repository\MediaInterestRepository;
use App\Repository\MediaLanguagesRepository;
use App\Repository\MediaGeographicalSystemRepository;
use App\Repository\MediaSocialNetworkRepository;

use App\Form\MediaLanguagesType;
use App\Form\InterestType;


class MediaType extends AbstractType
{

    private $mediaInterestRepo;
    private $mediaLanguagesRepo;
    private $mediaGeographicalSystemRepo;
    private $mediaSocialNetworkRepo;

    public function __construct(MediaInterestRepository $mediaInterestRepo, MediaLanguagesRepository $mediaLanguagesRepo, MediaGeographicalSystemRepository $mediaGeographicalSystemRepo, MediaSocialNetworkRepository $mediaSocialNetworkRepo)
    {
        $this->mediaInterestRepo = $mediaInterestRepo;
        $this->mediaLanguagesRepo = $mediaLanguagesRepo;
        $this->mediaGeographicalSystemRepo = $mediaGeographicalSystemRepo;
        $this->mediaSocialNetworkRepo = $mediaSocialNetworkRepo;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $entity = $builder->getData();
        $logo = $entity->getFileName();
        $languages = $interests = $geographicalSystems = [];

        if ($entity->getId() > 0){
          $interests = $this->mediaInterestRepo->getItemsForSelect($entity->getId());
          $languages = $this->mediaLanguagesRepo->getItemsForSelect($entity->getId());
          $geographicalSystems = $this->mediaGeographicalSystemRepo->getItemsForSelect($entity->getId());
        }

        $builder
            
            ->add('category', ChoiceType::class, [
                 'choices' => array_flip(Media::CATEGORIES),
                'attr' => ['style' => 'display: flex;']
              ])
             ->add('parent', EntityType::class, [
                'label' => "Parent",
                'class' => Media::class,
                'placeholder' => '',
                'required' => false,
                'attr' => ['class' => 'select2']
             ])
            ->add('name')
            ->add("logo", AjaxUploadType::class, [
      'label' => "Logo",
      'mapped' => false,
      'required' => false,
      'max' => 1,
      'files' => $logo ? [['name' => $logo, 'path' => "logos/{$logo}"]] : [],
      'path' => '/uploads/logos',
      'extensions' => ['jpeg', 'jpg', 'png', 'gif']
         ])
            ->add('country', EntityType::class, [
                'label' => "Country",
                'class' => Country::class,
                'group_by' => 'continentName',
                'placeholder' => '',
                'required' => false,
                'attr' => ['class' => 'select2']
             ])
            ->add('website', TextType::class, ['required' => false])
            ->add('visitorsCount', IntegerType::class, ['required' => false])
            ->add('contact', TextType::class, ['required' => false])
            ->add('email', TextType::class, ['required' => false])
            ->add('telephone', TextType::class, ['required' => false])
            ->add('language', EntityType::class, [
                'label' => "Language",
                'class' => Language::class,
                'placeholder' => '',
                'required' => false,
                'attr' => ['class' => 'select2']
             ])

            ->add('interests', EntityType::class, [
               'mapped' => false,
               'class' => Interest::class,
               'expanded' => true,
               'multiple' => true,
               'attr' => ['style' => 'display: flex;'],
               'data' => $interests,
               'required' => false])
             
           /*->add('languages', ChoiceType::class, [
                'mapped' => false,
                'choices' => array_flip(Media::LANGUAGES),'expanded' => true,
                'multiple' => true,
                'required' => false,
                'data' => $languages,
                'attr' => ['style' => 'display: flex;']
              ])*/
 
           ->add('geographicalSystems', EntityType::class, [
                'class' => GeographicalSystem::class,
                'mapped' => false,
                'required' => false,
                'expanded' => true,
                'data' => $geographicalSystems,
                'multiple' => true,
                'attr' => ['style' => 'display: flex;']
              ])
           ->add('facebook', TextType::class, ['required' => false])
           ->add('facebook_followers_count', TextType::class, ['required' => false])
           ->add('twitter', TextType::class, ['required' => false])
           ->add('twitter_followers_count', TextType::class, ['required' => false])
           ->add('instagram', TextType::class, ['required' => false])
           ->add('instagram_followers_count', TextType::class, ['required' => false])
           ->add('youtube', TextType::class, ['required' => false])
           ->add('youtube_followers_count', TextType::class, ['required' => false])
           
        ;

    // Social networks

    // prepare data
    /*$social_networks = [];
    if ( $entity->getId() ) {
      $results = $entity->getSocialNetworks();
      foreach($results as $result) {
        $social_networks[] = $result;
      }
    }

     
    $social_networks = $entity->getSocialNetworks();
    $social_networks_count = count($social_networks)>0 ? count($social_networks) : 1;

    $builder->add('social_networks_count', HiddenType::class, ['mapped' => false, 'data' => $social_networks_count]);
    
    for ($i=0; $i < $social_networks_count; $i++) {
      
      $builder->add("name_{$i}", ChoiceType::class, [
        'choices' => array_flip(MediaSocialNetwork::SOCIAL_NETWORKS),
        'mapped' => false,
        'required' => false,
        'data' => isset($social_networks[$i]) ? $social_networks[$i]->getName() : null
              ])
            ->add("link_{$i}", TextType::class,
          [
        'label' => "Link",
        'mapped' => false,
        'required' => false,
        'data' => isset($social_networks[$i]) ? $social_networks[$i]->getLink() : null
      ])
            ->add("folowersCount_{$i}", IntegerType::class,
          [
        'label' => "Folowers count",
        'mapped' => false,
        'required' => false,
        'data' => isset($social_networks[$i]) ? $social_networks[$i]->getFolowersCount() : null
      ]);
    }*/

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
