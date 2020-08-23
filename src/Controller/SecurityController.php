<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Core\Security;

class SecurityController extends AbstractController
{
    use TargetPathTrait;

    /**
    * @Route("/login", name="security_login")
    */
    public function login(AuthenticationUtils $authenticationUtils, Security $security)
    {
        // if user is already logged in, don't display the login page again
        if ($security->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_index');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            // last username entered by the user (if any)
            'last_username' => $lastUsername,
            // last authentication error (if any)
            'error' => $error,
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
