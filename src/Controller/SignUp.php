<?php

namespace App\Controller;


use App\Entity\User;
use App\Forms\SignUpForm;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SignUp extends AbstractController
{
    /**
     * @Route("/Connection/SignUpz")
     * @param Request $request
     * @param ObjectManager $objectManager
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function create(Request $request, ObjectManager $objectManager)
    {
        $user = new User();
        $form = $this->createForm(SignUpForm::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setCreatedAt(new \DateTime());
            $user->setUpdateAt(new \DateTime());

            $objectManager->persist($user);
            $objectManager->flush();

            return $this->render("LogOut/baseLogOut.html.twig",[
                'user' => $user->getName(),
            ]);

        }

        return $this->render('Connection/SignUp.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}