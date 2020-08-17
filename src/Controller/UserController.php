<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class UserController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
     * @Route("/account", name="user_registration")
     */
    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        // the form is created
        $form_registration = $this->createForm(UserFormType::class, $user);

        // writes the submitted data of the $user object (object is validated)
        $form_registration->handleRequest($request);

        // checks object whether or not it has valid data (if not the form is rendered again)
        if ($form_registration->isSubmitted() && $form_registration->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form_registration->get('password')->getData()
                )
            );
            
            $form_registration->get('agreeTerms')->getData();

            // saving the object to the database
            $entityManager = $this->getDoctrine()->getManager();

            // tell Doctrine you want to (eventually) save the User
            $entityManager->persist($user);

            // actually executes the querie (i.e. the INSERT query)
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('petar_belberov@gmx.com', 'Petar Belberov'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('user/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $this->redirectToRoute('home_index');
        }

        // the form is rendered
        return $this->render('user/account.html.twig', [
            'form_registration' => $form_registration->createView()
        ]);
    }

    /**
     * @Route("/verify/email", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
}
