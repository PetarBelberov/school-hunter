<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/universities", name="university_")
 */
class UniversityController extends AbstractController
{
    /**
     * @Route("/", name="university_index")
     */
    public function index()
    {
        return $this->render('university/index.html.twig', [
            'controller_name' => 'UniversityController',
        ]);
    }

    /**
     * @Route("/{slug}", name="post")
     */
    public function post($slug)
    {
        
    }
}
