<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 16/03/2019
 * Time: 17:09
 */

namespace App\Controller;


use App\Entity\Exercice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET", "POST"})
     * @return Response
     */
    public function home(): Response
    {
        $list = $this->getDoctrine()->getRepository(Exercice::class)->findAll();
        return $this->render('public/index.html.twig', array('exercices' => $list));
    }
}