<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 26/03/2019
 * Time: 10:17
 */

namespace App\Controller\User;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class profil extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function profileUser()
    {
        $user = $this->getUser();
        $list = $this->getDoctrine()->getRepository(user::class)->findOneBy(array('id' => $user->getId()));
        return $this->render('User/profil.html.twig', array('profils' => $list));
    }
}
