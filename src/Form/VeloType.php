<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use App\Entity\Velo;
use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class VeloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('modele')
            
            ->add('etat')
            ->add('prix')
            ->add('image')
            ->add('station')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Velo::class,
            'attr' => [
                'novalidate' => 'novalidate', // Désactive la validation HTML5 côté client pour le formulaire
            ],
        ]);
    }
    
}