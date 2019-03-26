<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 25/03/2019
 * Time: 12:01
 */

namespace App\Manager;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\MessageService;
use App\Services\PasswordService;
use Doctrine\ORM\EntityManagerInterface;

class SecurityManager
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var \Twig_Environment
     */
    protected $templating;

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
     * SecurityManager constructor.
     * @param EntityManagerInterface $entityManager
     * @param \Twig_Environment $templating
     * @param PasswordService $passwordService
     * @param MessageService $messageService
     * @param UserRepository $userRepository
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        \Twig_Environment $templating,
        PasswordService $passwordService,
        MessageService $messageService,
        UserRepository $userRepository
    )
    {
        $this->em = $entityManager;
        $this->templating = $templating;
        $this->passwordService = $passwordService;
        $this->messageService = $messageService;
        $this->userRepository = $userRepository;
    }


    /**
     * @param User $user
     * @return mixed
     * @throws \Exception
     */
    public function registerUser(User $user)
    {
        if (count($this->userRepository->findBy(["email"=>$user->getEmail()])) !== 0) {
            return $this->messageService->addError('Cette adresse e-mail est déjà utilisée');
        }


        //$user->setRole('ROLE_USER');
        $user->setCreatedAt(new \DateTime());
        $user->setUsername($user->getEmail());
        $user->setUpdatedAt(new \DateTime());
        //$user->setStatut(Utilisateur::STATUS_ENABLED);
        $password = $this->passwordService->encode($user, $user->getPassword());
        $user->setPassword($password);
        $user->setName($user->getName());
        $user->setLastname($user->getLastname());
        $user->setEmail($user->getEmail());
        $user->setSex($user->getSex());
        $user->setBirth($user->getBirth());
        $user->setWeight($user->getWeight());
        $user->setHeight($user->getHeight());

        $this->em->persist($user);
        $this->em->flush();

        return $this->messageService->addSuccess('Vos informations ont bien été prises en compte.');
    }
}