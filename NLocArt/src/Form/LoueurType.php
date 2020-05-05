<?php

namespace App\Form;


use App\Entity\CategorieClient;
use App\Entity\Client;
use App\Entity\Loueur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoueurType extends AbstractType
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
			->add('mdp', PasswordType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  '*******'
				]
			])

			# Adresse
			/*->add('adresses', CollectionType::class, array(
				'entry_type'   => AdresseType::class,
				'allow_add'    => true,
				'allow_delete' => true
			))*/

			# Champ societe
			->add('societe', TextType::class, [
				'required'      => false,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le nom de votre societe'
				]
			])

			# Champ siret
			->add('siret', TextType::class, [
				'required'      => false,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez votre siret'
				]
			])

			# Champ tel
			->add('telephone', TelType::class, [
				'required'      => false,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez votre numéro de Telephone'
				]
			])


			# Champ Mobile
			->add('mobile', TelType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez votre numéro de Mobile'
				]
			])



			# Bouton INSCRIPTION
			->add('save', SubmitType::class, [
				'label' => 'M\'inscrire !',
				'attr'      => [
					'class' => 'btn btn-primary'
				]
			])
		;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Loueur::class,
		));
	}
}