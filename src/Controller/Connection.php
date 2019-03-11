<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 03/03/2019
 * Time: 16:51
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Connection extends AbstractController
{
    /**
     * @Route("/Connection/login")
     */
    public function read()
    {
        return $this->render('Connection/login.html.twig');
    }

    /**
     * @Route("/article/create", name="article_create")
     */
    public function create()
    {

    }

}