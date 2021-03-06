<?php

namespace App\Controller;

use App\Entity\UniversityMajor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Core\Security;

use App\Entity\User;

class SecurityController extends AbstractController
{
    use TargetPathTrait;

    /**
    * @Route("/login", name="security_login")
    */
    public function login(Request $request, Security $security, AuthenticationUtils $helper): Response
    {
        // if user is already logged in, don't display the login page again
        if ($security->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_index');
        }
        dump($helper->getLastUsername());

        $this->saveTargetPath($request->getSession(), 'main', $this->generateUrl('home_index'));

        return $this->render('security/login.html.twig', [
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/logout", name="security_logout", methods={"GET"})
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }
}
