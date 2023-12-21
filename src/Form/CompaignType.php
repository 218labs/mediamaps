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
    
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $compaign = $builder->getData();
        
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
