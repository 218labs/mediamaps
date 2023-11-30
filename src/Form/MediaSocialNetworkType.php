<?php

namespace App\Form;

use App\Entity\MediaSocialNetwork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MediaSocialNetworkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', ChoiceType::class, [
                'choices' => array_flip(MediaSocialNetwork::SocialNetwork),
                'attr' => ['style' => 'display: flex;']
              ])
            ->add('link')
            ->add('folowersCount')
            ->add('media')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MediaSocialNetwork::class,
        ]);
    }
}
