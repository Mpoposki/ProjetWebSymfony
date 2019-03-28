<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 16/03/2019
 * Time: 05:42
 */

namespace App\Forms;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Length;

class SignUpForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre Prénom',]])
            ->add('lastname', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre Nom',]])
            ->add('password', PasswordType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre mot de passe',]])
            ->add('confirm_password', PasswordType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Confirmer votre mot de passe',]])
            ->add('email', EmailType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre Email',]])
            ->add('sex', ChoiceType::class, array('choices' => array(
                'Homme' => true,
                'Femme' => false,),
                'expanded' => false,
                'label' => ' ',)
                )
            ->add('birth', BirthdayType::class, [
                'label' => ' ',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('weight', IntegerType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre poids (en kg)',]])
            ->add('weightObj', IntegerType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre poids objectif (en kg)',]])
           ->add('height', IntegerType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez votre taille (en cm)',]])
            ->add('time_worked', IntegerType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Entrez le temps de travail (mois)',]])

            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'

            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
