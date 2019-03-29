<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 28/03/2019
 * Time: 19:27
 */

namespace App\Forms;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre email','class' => 'fadeIn second']])

            ->add('password', PasswordType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre mot de passe','class' => 'fadeIn third']])

            ->add('Login', SubmitType::class ,[
                'attr' => ['class' => 'fadeIn third']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
