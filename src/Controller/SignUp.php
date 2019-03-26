<?php

namespace App\Controller;


use App\Entity\User;
use App\Forms\SignUpForm;
use App\Repository\UserRepository;
use App\Manager\SecurityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\MessageService;
use App\Services\PasswordService;
use Symfony\Component\HttpFoundation\Response;

class SignUp extends AbstractController
{

    /**
     * @var PasswordService
     */
    protected $passwordService;

    /**
     * @var MessageService
     */
    protected $messageService;

    /**
     * @var UserRepository
     */
    protected $userRepository;




    /**
     * @Route("/Connection/SignUp")
     */


    /*
    public function create(Request $request, SecurityManager $securityManager)
    {
        $user = new User();
        $form = $this->createForm(SignUpForm::class, $user);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $user->setCreatedAt(new \DateTime());
            $user->setUpdateAt(new \DateTime());

            $securityManager->persist($user);
            $objectManager->flush();

            return $this->render("user/index.html.twig",[
                'user' => $user->getName(),
            ]);

        }

        return $this->render('Connection/SignUp.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    */


    /**
     * @Route("/Connection/SignUp", name="register", methods={"GET","POST"})
     * @param Request $request
     * @param SecurityManager $securityManager
     * @return Response
     * @throws \Exception
     */
    public function registerUser(
        Request $request,
        SecurityManager $securityManager
    ) {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $securityManager->registerUser($user);
        }

        return $this->render('Connection/SignUp.html.twig', [
            'form' => $form->createView()
        ]);
    }

}