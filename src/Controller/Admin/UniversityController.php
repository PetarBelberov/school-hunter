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
use Symfony\Component\HttpFoundation\Request;

    /**
    * @Route("/admin/universities", name="admin_university_")
    * @IsGranted("ROLE_ADMIN")
    */
class UniversityController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        $universities = $this->getDoctrine()
            ->getRepository(University::class)
            ->findAll();

        return $this->render('admin/university/list.html.twig', [
            'universities' => $universities,
        ]);
    }
}
