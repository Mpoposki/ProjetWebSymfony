<?php

namespace App\Controller;


use App\Entity\User;
use App\Forms\poidForm;
use App\Forms\SignUpForm;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class update extends AbstractController
{


    /**
     * @Route("/edit", name="edit")
     */

    public function profileEditUserPoid(Request $request, ObjectManager $objectManager)



        {
            $user = $this->getUser();
            $list = $this->getDoctrine()->getRepository(user::class)->findOneBy(array('id' => $user->getId()));

            $user = new User();
            $form = $this->createForm(poidForm::class, $user);

            $form->handleRequest($request);

            $weightNew = $form->get('weight')->getData();
            if($weightNew!=0){
                $list -> setWeight($weightNew);
                $objectManager-> flush();
            }
            
            return $this->render('User/edit.html.twig', array('profils' => $list, "weightNew" => $weightNew, 'form' => $form->createView()));
        }





}