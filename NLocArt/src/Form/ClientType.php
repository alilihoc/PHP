<?php

namespace App\Form;


use App\Entity\CategorieClient;
use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ClientType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			# Champ prenom
			->add('prenom', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez votre Prénom'
				]
			])

			# Champ nom
			->add('nom', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez votre Nom'
				]
			])

			# Champ email
			->add('mail', EmailType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez votre Email'
				]
			])

			# Champ mot de passe
			->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options'  => [
                    'label' => false,
                    'required'      => true,
                    'attr'          => [
                        'class'         =>  'form-control',
                        'placeholder'   => 'Saisissez votre mot de passe'
                    ],
                    'constraints' => [
                        new NotBlank(),
                        New Regex([
                            'pattern' => "^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^",
                            'message' => "Votre mot de passe doit contenir au moins une majuscule, une minuscule, un nombre et contenir au moins 8 caractères"
                        ])
                    ]
                ],
                'second_options' => [
                    'label' => false,
                    'required'      => true,
                    'attr'          => [
                        'class'         =>  'form-control',
                        'placeholder'   =>  'Vérification du mot de passe'
                    ],
                ]

			])

			# Bouton INSCRIPTION
			->add('reset', ResetType::class, array(
				'label' => 'Reset',
				'attr' 	=> [
					'class'         =>  'btn btn-lg btn-block bouton_lien'
				]))
				
			->add('submit', SubmitType::class, [
				'label' => 'M\'inscrire !',
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