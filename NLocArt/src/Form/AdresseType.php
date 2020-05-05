<?php


namespace App\Form;


use App\Entity\Adresse;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;


class AdresseType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
            # Champ Type
            ->add('type', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'class'         =>  'form-control',
                    'placeholder'   =>  "Type de l'adresse (ex: Domicile, Professionel, nom société si plusieurs sociétés)"
                ]
            ])

            # Champ adresse
            ->add('adresse', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'class'         =>  'form-control membre_adresse',
                    'placeholder'   =>  'Saisissez l\'adresse primaire'
                ]
            ])

			# Champ adresse2
			->add('adresse2', TextType::class, [
				'required'      => false,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control',
					'placeholder'   =>  'Saisissez l\'adresse secondaire'
				]
			])

			# Champ codePostal
			->add('cp', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control cp',
					'placeholder'   =>  'Saisissez le code postal'
				]
			])

			# Champ ville
			->add('ville', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control city',
					'placeholder'   =>  'Saisissez la ville'
				]
			])

			# Champ pays
			->add('pays', TextType::class, [
				'required'      => true,
				'label'         => false,
				'attr'          => [
					'class'         =>  'form-control country',
					'placeholder'   =>  'Saisissez le pays'
				]
			])
		;
    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Adresse::class,
		));
	}
}