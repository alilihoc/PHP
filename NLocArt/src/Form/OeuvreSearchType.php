<?php

namespace App\Form;

use App\Entity\CategorieOeuvre;
use App\Entity\OeuvreSearch;
use App\Entity\SupportOeuvre;
use App\Entity\TechniqueOeuvre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OeuvreSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('tri',ChoiceType::class,[
                'required'  => false,
                'label'     => 'Trier Par',
                'choices'   => $this->reverseTri(),
                'data' => 2,
                'multiple'  => false,
                'attr'      => [
                    'class'        => 'form-control',
                    'placeholder'  => 'Tarif de vente Maximale'
                ],
            ])

            ->add('nomOeuvre', TextType::class,[
                'required'   => false,
                'label'      => 'Nom de l\'Oeuvre',
                'attr'      => [
                    'class'        => 'form-control',
                    'placeholder'  => 'Recherche par nom'
                ]
            ])

            ->add('categorie', EntityType::class,[
                'required'    => false,
                'class'       => CategorieOeuvre::class,
                'choice_label'=> 'libelleCategorieOeuvre',
                'label'       => false,
                'expanded'    => false,
                'multiple'    => true,
                'attr'        => [
                    'class'        => 'form-control',
                ],
            ])

            ->add('prixLocationMax',IntegerType::class,[
                'required'  => false,
                'label'     => false,
                'attr'      => [
                    'class'        => 'form-control',
                    'placeholder'  => 'Tarif de location Maximale'
                ],
            ])

            ->add('prixVenteMax',IntegerType::class,[
                'required'  => false,
                'label'     => false,
                'attr'      => [
                    'class'        => 'form-control',
                    'placeholder'  => 'Tarif de vente Maximale'
                ],
            ])

            ->add('supportOeuvre',  EntityType::class, [
                'class' => SupportOeuvre::class,
                'choice_label' => 'libelleSupportOeuvre',
                'required' => false,
                'expanded'  => false,
                'multiple'  => true,
                'label'     => false,
                'attr'          => [
                    'class'         =>  'form-control'
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OeuvreSearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

    public function reverseTri() {
        $reverseChoices = [];
        foreach (OeuvreSearch::triChoices as $k => $v){
            $reverseChoices[$v] = $k;
        }
        return $reverseChoices;
    }
}
