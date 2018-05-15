<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SubmitFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array('label' => 'Nome', 'attr' => array('data-tooltip' => 'tooltip di nome')))
            ->add('cognome', TextType::class, array('label' => 'Cognome', 'attr' => array('data-tooltip' => 'tooltip di cognome')))
            ->add('indirizzo', TextType::class, array('label' => 'Indirizzo', 'attr' => array('data-tooltip' => 'tooltip di indirizzo')))
            ->add('conferma', SubmitType::class, array('label' => 'Conferma'));
    }
}