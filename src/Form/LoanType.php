<?php

namespace App\Form;

use App\Entity\Loan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idUser', NumberType::class, [
                'label' => 'User ID',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter user ID'
                ]
            ])
            ->add('loanType', ChoiceType::class, [
                'label' => 'Loan Type',
                'required' => true,
                'choices' => [
                    'Personal Loan' => 'PERSONAL',
                    'Business Loan' => 'BUSINESS',
                    'Mortgage' => 'MORTGAGE',
                    'Auto Loan' => 'AUTO',
                    'Student Loan' => 'STUDENT',
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('amount', NumberType::class, [
                'label' => 'Amount',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter loan amount',
                    'min' => 0,
                    'step' => 0.01
                ]
            ])
            ->add('duration', NumberType::class, [
                'label' => 'Duration (months)',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter duration in months',
                    'min' => 1
                ]
            ])
            ->add('interestRate', NumberType::class, [
                'label' => 'Interest Rate (%)',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter annual interest rate',
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.01
                ]
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'required' => true,
                'choices' => [
                    'Pending' => 'PENDING',
                    'Active' => 'ACTIVE',
                    'Completed' => 'COMPLETED',
                    'Rejected' => 'REJECTED',
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save Loan',
                'attr' => [
                    'class' => 'btn btn-primary mt-3'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Loan::class,
        ]);
    }
}