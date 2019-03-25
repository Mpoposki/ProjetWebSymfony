<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 24/03/2019
 * Time: 02:18
 */

namespace App\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre Email',]])

            ->add('lastname', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre Mot de passe',]])

            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'

            ]);
    }
}