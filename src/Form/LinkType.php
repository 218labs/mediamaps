<?php

namespace App\Form;

use App\Entity\Link;
use App\Entity\Category;
use App\Entity\Compaign;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Form\Type\AjaxUploadType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class LinkType extends AbstractType
{

    private $security;

    public function __construct(Security $security)
    {
      $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $entity = $builder->getData();
        $file_name = $entity->getFileName();
        $current_user = $options['user'];

        if ( !$this->security->isGranted('ROLE_ADMIN') ) {
          $compaigns = $current_user->getCompaigns();
          $builder->add('compaign', EntityType::class, [
          'class' => Compaign::class,
          'placeholder' => '',
          'required' => false,
          'choices' => $compaigns
          ]);
        }
        else{
            $builder
            ->add('user', EntityType::class, [
                'class' => User::class,
                'required' => true,
             ])
            ->add('compaign', EntityType::class, [
                'class' => Compaign::class,
                'required' => false,
             ]);
            
        }

        
            $builder->add('title')
            ->add('link')
            ->add("file_name", AjaxUploadType::class, [
      'label' => "File",
      'mapped' => false,
      'required' => false,
      'max' => 1,
      'files' => $file_name ? [['name' => $file_name, 'path' => "attachements/{$file_name}"]] : [],
      'path' => '/uploads/attachements',
      'extensions' => ['jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx']
         ])
            ->add('category', EntityType::class, [
                'label' => "Category",
                'class' => Category::class,
             ])
   
           ->add('geographical_scope', ChoiceType::class, [
                'choices' => array_flip(Link::GEOGRAPHICAL_SCOPE),'expanded' => true,
                'attr' => ['style' => 'display: flex;']
              ])
           ->add('orientation', ChoiceType::class, [
                'choices' => array_flip(Link::ORIENTATION),'expanded' => true,
                'attr' => ['style' => 'display: flex;']
              ])
        ->add('published_on', DateType::class, [
      'label' => 'Published on',
      'widget' => 'single_text',
      'required' => false,
      //'years' => range(date('Y'), date('Y')),
      //'placeholder' => [ 'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour']
    ])  
        ;
     

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('user');
        $resolver->setDefaults([
            'data_class' => Link::class,
        ]);
    }
}
