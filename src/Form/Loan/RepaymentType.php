<?php

namespace App\Form;

use App\Entity\Repayment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('month', NumberType::class, [
                'label' => 'Month',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter month number',
                    'min' => 1
                ]
            ])
            ->add('startingBalance', NumberType::class, [
                'label' => 'Starting Balance',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter starting balance',
                    'min' => 0,
                    'step' => 0.01
                ]
            ])
            ->add('monthlyPayment', NumberType::class, [
                'label' => 'Monthly Payment',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter monthly payment',
                    'min' => 0,
                    'step' => 0.01
                ]
            ])
            ->add('capitalPart', NumberType::class, [
                'label' => 'Capital Part',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter capital part',
                    'min' => 0,
                    'step' => 0.01
                ]
            ])
            ->add('interestPart', NumberType::class, [
                'label' => 'Interest Part',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter interest part',
                    'min' => 0,
                    'step' => 0.01
                ]
            ])
            ->add('remainingBalance', NumberType::class, [
                'label' => 'Remaining Balance',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter remaining balance',
                    'min' => 0,
                    'step' => 0.01
                ]
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'required' => true,
                'choices' => [
                    'Unpaid' => 'UNPAID',
                    'Paid' => 'PAID',
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save Repayment',
                'attr' => [
                    'class' => 'btn btn-primary mt-3'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Repayment::class,
        ]);
    }
}