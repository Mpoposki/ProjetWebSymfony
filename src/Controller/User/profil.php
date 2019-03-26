<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 26/03/2019
 * Time: 10:17
 */

namespace App\Controller\User;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class profil extends Controller
{
    /**
     * @Route("/profil", name="profil")
     */
    public function profileUser()

    {

        $user =new User();
        $list = $this->getDoctrine()->getRepository(user::class)->findAll();
        return $this->render('User/profil.html.twig', array('profils' => $list));

    }
}
