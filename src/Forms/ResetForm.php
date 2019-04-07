<?php

namespace App\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ResetForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre Email',]])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer nouveau mot de passe']);
    }

}
