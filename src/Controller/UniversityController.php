<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\University;
use App\Entity\Major;
use App\Entity\UniversityMajor;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;

    /**
    * @Route("/universities", name="university_")
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
        $majors = array();
        $university_majors = $this->getDoctrine()
        ->getRepository(UniversityMajor::class)
        ->findBy(['university' => $university]);

        $counter = 0;
        foreach ($university_majors as $university_major) {
            array_push($majors, array($counter => $university_major->getMajor()->getName(), $university_major->getRSVURanking()));
            $counter++;
        }

        return $this->render('university/show.html.twig',
            array(
                'university' => $university,
                'majors' => $majors
            )
        );
    }
}
