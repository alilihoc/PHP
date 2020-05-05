<?php

namespace App\Form;


use App\Entity\CategorieClient;
use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		
		# Champ nom
		->add('nom', TextType::class, [
			'required'      => true,
			'label'         => 'Nom : ',
			'attr'          => [
				'class'         =>  'form-control',
				'placeholder'   =>  'Saisissez votre Nom'
				]
		])

		# Champ prenom
		->add('prenom', TextType::class, [
			'required'      => true,
			'label'         => 'Prenom :',
			'attr'          => [
				'class'         =>  'form-control',
				'placeholder'   =>  'Saisissez votre Prénom'
			]
		])

		# Champ email
		->add('mail', EmailType::class, [
			'required'      => true,
			'label'         => 'Email :',
			'attr'          => [
				'class'         =>  'form-control',
				'placeholder'   =>  'Saisissez votre Email'
			]
		])

        # Champ tel
        ->add('telephone', TelType::class, [
            'required'      => false,
            'label'         => 'Telephone fixe :',
            'attr'          => [
                'class'         =>  'form-control',
                'placeholder'   =>  'Saisissez votre numéro de Telephone'
                ]
                ])

        # Champ Mobile
        ->add('mobile', TelType::class, [
            'required'      => false,
            'label'         => 'Téléphone Mobile :',
            'attr'          => [
                'class'         =>  'form-control',
                'placeholder'   =>  'Saisissez votre numéro de Mobile'
                ]
        ])

        # Champ CATEGORIE
        ->add('categorie', EntityType::class, [
            'class' => CategorieClient::class,
            'choice_label' => 'libelleCategorieClient',
            'expanded'  => false,
            'multiple'  => false,
            'label'     => 'Statut :',
            'attr'          => [
                'class'         =>  'form-control'
                ]
        ])
        # Champ societe
        ->add('societe', TextType::class, [
            'required'      => false,
            'label'         => 'Societe',
            'attr'          => [
                'class'         =>  'form-control',
                    'placeholder'   =>  'Saisissez le nom de votre societe'
        ]
        ])

        # Champ siret
        ->add('siret', IntegerType::class, [
            'required'      => false,
            'label'         => 'SIRET :',
            'attr'          => [
                'class'         =>  'form-control',
                'placeholder'   =>  'Saisissez votre siret'
            ]
        ])



        # Adresse
        ->add('adresses', CollectionType::class, array(
            'entry_type'   => AdresseType::class,
            'allow_add'    => true,
            'allow_delete' => true,
            'label' => 'Adresse Principale :',
            'required' => false
        ))



        # Bouton INSCRIPTION
        ->add('reset', ResetType::class, array(
            'label' => 'Reset',
            'attr' 	=> [
                'class'         =>  'btn btn-lg btn-block bouton_lien'
            ]))

        ->add('submit', SubmitType::class, [
            'label' => 'Modifier !',
            'attr'      => [
                'class' => 'btn btn-lg btn-block bouton_lien'
            ]
        ])
        ;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Client::class,
		));
	}
}