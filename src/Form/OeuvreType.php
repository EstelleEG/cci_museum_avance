<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Oeuvre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OeuvreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('auteur')
            ->add('categorie', EntityType::class,[ //type de l'input du form que l'on veut display en front 
                'class' => Categorie::class, //ref a la class Categorie
                'choice_label' => function ($categorie){
                    return $categorie->getNom();
                },
                'label' => 'categorie'
            ])
            ->add('creation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Oeuvre::class,
        ]);
    }
}
