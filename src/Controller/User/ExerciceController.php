<?php

namespace App\Controller\User;

use App\Entity\Exercice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    /**
     * @Route("/Exercice", name="list")
     */
    public function ListeExo()
    {

        $list = $this->getDoctrine()->getRepository(Exercice::class)->findAll();
        return $this->render('user/Exercices/exercice.html.twig', array('exercices' => $list));
    }
    /**
     * @Route("/Exercice/{slug}", name="exo")
     */
    public function exo($slug)
    {
        $exo=$this->getDoctrine()->getRepository(Exercice::class)->findOneBy(['name' => $slug]);
        return $this->render('user/Exercices/exoChoisi.html.twig', array('exercice' => $exo));
    }

}



