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
     * @Route("/Connection/SignUp")
     */
    public function create(Request $request, ObjectManager $objectManager)
    {
        $user=new User();
        $form=$this->createForm(SignUpForm::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $objectManager->persist($user);
            $objectManager->flush();
            /*
                        return $this->redirectToRoute('', [
                            'slug' => $user->getTitle(),
                        ]);
             */
        }

        return $this->render('Connection/SignUp.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}