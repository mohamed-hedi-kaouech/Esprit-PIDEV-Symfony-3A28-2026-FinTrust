<?php

namespace App\Form\Admin;

use App\Entity\Publication\Publication;
use App\Repository\PublicationRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicationFormType extends AbstractType
{
    public function __construct(
        private readonly PublicationRepository $publicationRepository,
    ) {}

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $categories = $this->publicationRepository->getDistinctCategories();

        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['placeholder' => 'Titre de la publication'],
            ])
            ->add('contenu', TextareaType::class, [
                'label' => 'Contenu',
                'attr' => [
                    'placeholder' => 'Contenu complet de la publication',
                    'rows' => 10,
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => array_combine($categories, $categories) ?: [],
                'placeholder' => 'Choisir une catégorie',
                'required' => false,
                'attr' => ['class' => 'form-select'],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Brouillon' => 'BROUILLON',
                    'Publié' => 'PUBLIÉ',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publication::class,
        ]);
    }
}
