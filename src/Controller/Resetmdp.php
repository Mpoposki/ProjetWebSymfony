<?php

namespace App\Controller;

use App\Entity\User;
use App\Forms\SignUpForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class Resetmdp extends AbstractController
{

    /**
     * @Route("/Connection/resetmdp" , name="resetmdp")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function Reset()
    {
        return $this->render('Connection/resetmdp.html.twig');
    }

    /**
     * @Route("/resetmdp" , name="Mailreset")
     */
    public function Mailreset(Request $request, \Swift_Mailer $mailer)
    {
        //$user = $this->get('security.context')->getToken()->getUser();
        //$list = $this->getDoctrine()->getRepository(user::class)->findOneBy(array('id'=>$user->getId()));
        //$list->getEmail();

            $message = (new \Swift_Message('Votre mot de passe AppSport'))
                ->setFrom('poposki.smurf@gmail.com')
                ->setTo('poposki.matthieu@gmail.com')
                ->setBody('Voici votre mot de passe : ');

            $mailer->send($message);

        return $this->redirectToRoute('Login');

        }

}