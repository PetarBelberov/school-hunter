<?php

namespace App\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\University;
use App\Entity\Major;
use App\Entity\UniversityMajor;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;

    /**
    * @Route("/admin/universities", name="admin_university_")
    * @IsGranted("ROLE_ADMIN")
    */
class UniversityController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('university/index.html.twig', [
            'controller_name' => 'UniversityController',
        ]);
    }

    /**
     * @Route("/{slug}", name="show")
     */
    public function show(University $university): Response
    {

    }
}