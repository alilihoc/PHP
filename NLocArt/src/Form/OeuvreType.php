<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21/03/2018
 * Time: 14:32
 */

namespace App\Form;


use App\Entity\Artiste;
use App\Entity\CategorieClient;
use App\Entity\CategorieOeuvre;
use App\Entity\Oeuvre;
use App\Entity\SupportOeuvre;
use App\Entity\TechniqueOeuvre;


use App\Entity\TechOeuvre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class OeuvreType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options){
		$builder

			->add('nomOeuvre', TextType::class,[
				'required'   => true,
				'label'      => 'Nom de l\'œuvre :',
				'attr'      => [
					'class'        => 'form-control',
					'placeholder'  => 'Saisissez un nom d\'oeuvre'
				]
			])

            ->add('imageFile', FileType::class,[
				'required'  => false,
				'label'=>'Photo de l\'œuvre :',
                'attr'      => [					
                    'class'                 => 'dropify-fr',
                    'data-default-file'     => 'Glisser votre fichier ou cliquez ici'
                ],

            ])

			->add('anneeCreationOeuvre', TextType::class,[
				'required'  => false,
				'label'     => 'Année de création  ',
                'attr'      => [
                    'class' => 'datepicker'
                ]
			])

            ->add('dispo', CheckboxType::class,[
                'required'	=> false,
                'label'     => 'Disponible',

            ])

            ->add('special', CheckboxType::class,[
                'required'	=> false,
                'label'     => 'Special',

            ])

			->add('hauteurOeuvre', NumberType::class,[
				'required'  => false,
				'label'     => 'Hauteur de l\'œuvre (cm)',
				'attr'      => [
					'class'        => 'form-control',
					'placeholder'  => 'Insérez la hauteur de l\'œuvre (cm)',
				],
			])

			->add('largeurOeuvre', NumberType::class,[
				'required'  => false,
				'label'     => 'Largeur de l\'œuvre (cm)',
				'attr'      => [
					'class'        => 'form-control',
					'placeholder'  => 'Insérez la largeur de l\'œuvre (cm)'
				],
			])

			->add('profondeurOeuvre', NumberType::class,[
				'required'  => false,
				'label'     => 'Profondeur de l\'œuvre (cm)',
				'attr'      => [
					'class'        => 'form-control',
					'placeholder'  => 'Insérez la profondeur de l\'œuvre (cm)'
				],
			])

			->add('poidsOeuvre', NumberType::class,[
				'required'  => false,
				'label'     => 'Poids de l\'œuvre (kg)',
				'attr'      => [
					'class'        => 'form-control',
					'placeholder'  => 'Insérez le poids de l\'œuvre (kg)'
				],
			])

			->add('prixLocationOeuvre', NumberType::class,[
				'required'  => false,
				'label'     => 'Tarif de location (€)',
				'attr'      => [
					'class'        => 'form-control',
					'placeholder'  => 'Tarif de Location'
				],
			])

            ->add('prixVenteOeuvre', NumberType::class,[
                'required'  => false,
                'label'     => 'Prix de Vente (€)',
                'attr'      => [
                    'class'        => 'form-control',
                    'placeholder'  => 'Prix de Vente'
                ],
            ])

            ->add('description', TextareaType::class,[
			    'required'  => false,
			 	'label'     => 'Description',
			 	'attr'      => [
			 		'class'        => 'form-control',
			 		'placeholder'  => 'Saisissez une description de l\'oeuvre'
			 	],
			 ])

            ->add('artiste', EntityType::class,[
                'required'    => true,
                'class'       => Artiste::class,
                'choice_label'=> 'pseudoArtiste',
                'label'       => 'Créateur : ',
                'attr'        => [
                    'class'        => 'form-control',
                    'placeholder'  => 'Saisissez un nom d\'artiste'
                ],
            ])

            ->add('categorie', EntityType::class,[
                'required'    => true,
                'class'       => CategorieOeuvre::class,
                'choice_label'=> 'libelleCategorieOeuvre',
                'expanded' => false,
                'label'       => 'Catégorie : ',
                'attr'        => [
                    'class'        => 'form-control',
                ],
            ])

			->add('supportOeuvre', EntityType::class, [
				'class' => SupportOeuvre::class,
				'choice_label' => 'libelleSupportOeuvre',
				'expanded'  => false,
				'multiple'  => false,
				'label'     => 'Support',
				'attr'          => [
					'class'         =>  'form-control'
				]])

            ->add('techniqueOeuvres', EntityType::class, [
                'class' => TechniqueOeuvre::class,
			 	'required' => false,
			 	'choice_label' => 'libelleTechniqueOeuvre',
			 	'expanded'  => false,
			 	'multiple'  => true,
			 	'label'     => 'Techniques utilisées',
			 	'attr'          => [
			 		'class'         =>  'form-control'
			 	]])

            ->add('reset', ResetType::class, array(
                'label' => 'Annuler',
                'attr' 	=> [
                    'class'         =>  'btn btn-lg btn-block bouton_lien'
            ]))

            ->add('submit', SubmitType::class, array(
                'label' => 'Enregistrer',
                'attr'  => [
                    'class'         =>  'btn btn-lg btn-block bouton_lien'

            ]));


	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Oeuvre::class,
		));
	}
}