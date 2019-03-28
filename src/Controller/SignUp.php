<?php

namespace App\Controller;


use App\Entity\User;
use App\Forms\SignUpForm;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SignUp extends AbstractController
{
    /**
     * @Route("/Connection/SignUp")
     * @param Request $request
     * @param ObjectManager $objectManager
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function create(Request $request, ObjectManager $objectManager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(SignUpForm::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $user->setCreatedAt(new \DateTime());
            $user->setUpdateAt(new \DateTime());


            $objectManager->persist($user);
            $objectManager->flush();

            return $this->redirectToRoute("Login");

        }

        return $this->render('Connection/SignUp.html.twig', [
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("/Connection/login" , name="Login")
     */
    public function Login()
    {

        return $this->render('Connection/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="Logout")
     */
    public function Deconnexion()
    {

    }
}