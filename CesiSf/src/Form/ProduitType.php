<?php

namespace App\Form;

use App\Entity\Marque;
use App\Entity\Produit;
use App\Form\Type\DatepickerType;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProduitType extends AbstractType
{

    private $translator;

    public function __construct(TranslatorInterface $translator) {
        $this->translator = $translator;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description',NULL ,[
              'label' => $this->translator->trans('Description')
            ])
            ->add('marque', EntityType::class,[
              'class' => Marque::class,
              'choice_label' => 'Nom'
            ])

          ->add('prixHT', NULL, [
              'label' => $this->translator->trans('Price HT')
            ])
            ->add('stockQte', NULL, [
              'label' => $this->translator->trans('Stock quantity')
            ])
            ->add('prixTTC', NULL, [
              'label' => $this->translator->trans('Price TTC')
            ])
            ->add('poids')
            ->add('couleur',ChoiceType::class,[
              'choices' => $this->getColorChoice()
            ])
            ->add('fabCity', NULL, [
                'label' => $this->translator->trans('Production city')
             ])
            ->add('fabAdress', NULL, [
                'label' => $this->translator->trans('Production adress')
            ])
            ->add('dateCreated', DateTimeType::class, [
              'label' => $this->translator->trans('Creation date'),
              'widget' => 'single_text',
              'attr' => [
                'class' => 'datepicker'
              ]
            ])
            ->add('demo')
            ->add('fabPostCode', NULL, [
                'label' => $this->translator->trans('Production postal code')
            ])
        ;

    }

    public function getColorChoice()
    {
        return array_flip(Produit::COULEUR);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
            'translation_domain' => 'forms'
        ]);
    }
}
