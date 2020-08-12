<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index()
    {
        // returns the user object if it is authenticated
        if ($this->getUser())
        {
            return $this->render('');
        }
        return $this->render('index.html.twig');
    }
}