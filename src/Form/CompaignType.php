<?php

namespace App\Form;

use App\Entity\Compaign;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Security\Core\Security;


class CompaignType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
      $this->security = $security;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $compaign = $builder->getData();
        $current_user = isset($options['user']) ? $options['user'] : null;

        if ( !$this->security->isGranted('ROLE_ADMIN') ) {
            $compaigns = $current_user->getCompaigns();
            $builder->add('parentCompaign', EntityType::class, [
                'class' => Compaign::class,
                'placeholder' => '',
                'required' => false,
                'choices' => $compaigns
            ]);
        }
        else{
            $builder->add('parentCompaign', EntityType::class, [
                'class' => Compaign::class,
                'required' => false,
            ]);
        }
        //->add('parent_compaign', EntityType::class, ['class' => Compaign::class,'required' => false,])
        $builder->add('subject')
        //->add('begin_on', TextType::class, ['required' => false, 'attr' => ['class' => 'datetimepicker']])
        //->add('end_on', TextType::class, ['required' => false, 'attr' => ['class' => 'datetimepicker']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Compaign::class,
        ]);
    }
}
