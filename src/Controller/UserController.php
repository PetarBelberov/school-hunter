<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/account", name="user_account")
     */
    public function account()
    {
        return $this->render('user/account.html.twig');
    }
}