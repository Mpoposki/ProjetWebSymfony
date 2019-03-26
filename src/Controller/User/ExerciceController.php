<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 25/03/2019
 * Time: 12:00
 */

namespace App\Controller\User;


use App\Entity\Exercice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExerciceController extends Controller
{
    /**
     * @Route("/Exercice", name="exercice")
     */
    public function ListeExo(){
        $list=$this->getDoctrine()->getRepository(Exercice::class)->findAll();

        return $this->render('User/exercice.html.twig', array('exercices'=>$list));
    }

}