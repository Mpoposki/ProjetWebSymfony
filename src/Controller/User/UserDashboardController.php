<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 19/03/2019
 * Time: 10:46
 */

namespace App\Controller\User;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class UserDashboardController extends AbstractController
{
    /**
     * @Route("/user", name="dashboard_user", methods={"GET", "POST"})
     * @return Response
     */
    public function dashboard() : Response
    {

        return $this -> render('user/index.html.twig');
    }
}