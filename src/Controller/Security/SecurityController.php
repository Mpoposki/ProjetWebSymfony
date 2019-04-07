<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 07/04/2019
 * Time: 16:50
 */

namespace App\Controller\Security;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Forms\LoginType;

class SecurityController extends AbstractController
{


    /**
     * @Route("/admin/login", name="login_admin", methods={"GET", "POST"})
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function adminLogin(Request $request, AuthenticationUtils $authUtils): Response
    {
        $form = $this->createForm(LoginType::class, [
            '_username' => $authUtils->getLastUsername(),
        ]);

        return $this->render('Connection/adminLogin.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/logout", name="logout_user")
     * @Route("/admin/logout", name="logout_admin")
     */
    public function logout()
    {
    }

}