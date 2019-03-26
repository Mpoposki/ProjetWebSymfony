<?php

namespace App\Controller\User;

use App\Entity\Exercice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExerciceController extends Controller
{
    /**
     * @Route("/exo")
     */
    public function ListeExo(){
        $list=$this->getDoctrine()->getRepository(Exercice::class)->findAll();
        return $this->render('User/exercice.html.twig', array('exercices'=>$list));
    }
}





