<?php

namespace App\Form;

use App\Entity\Artiste;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtisteType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			# Champ nomArtiste
			->add('nomArtiste', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le nom de l\'artiste'
				]
			])

			# Champ prénomArtiste
			->add('prenomArtiste', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le prénom de l\'artiste'
				]
			])

			# Champ pseudoArtiste
			->add('pseudoArtiste', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le pseudo de l\'artiste'
				]
			])

			# Champ mailArtiste
			->add('mailArtiste', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le mail de l\'artiste'
				]
			])

			# Champ telephoneArtiste
			->add('telephoneArtiste', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le telephone de l\'artiste'
				]
			])

			# Champ adresseArtiste
			->add('adresseArtiste', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez l\'adresse de l\'artiste'
				]
			])

			# Champ website
			->add('website', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez le site de l\'artiste'
				]
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Artiste::class,
		));
	}
}