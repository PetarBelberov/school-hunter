<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Repository\UserRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Core\Security;


class RegistrationController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
     * @Route("/register", name="user_registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, Security $security): Response
    {
        // if user is already logged in, don't display the login page again
        if ($security->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_index');
        }

        $user = new User();
        $user->setRoles(array('ROLE_USER'));
        $user->setUserType('other');

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('user_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('petar_belberov@gmx.com', 'Petar Belberov'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('emails/confirmation_email.html.twig')
            );

            $this->addFlash('verify_title', 'Verify your email');
            $this->addFlash('verify_paragraph', 'We sent you a verification code to the email address you used to create the account');
            return $this->render('user/confirmation_message.html.twig', ['user'=>$user]);
        }

        // the form is rendered
        return $this->render('user/register.html.twig', [
            'form_registration' => $form->createView()
        ]);
    }

    /**
     * @Route("/verify/email", name="user_verify_email")
     */
    public function verifyUserEmail(Request $request, UserRepository $userRepository): Response
    {
        $id = $request->get('id');

        if (null === $id) {
            return $this->redirectToRoute('user_registration');
        }

        $user = $userRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('user_registration');
        }

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('user_verify_email');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success_reg', 'Registration completed successfully');
        $this->addFlash('success_email', 'Your email address has been verified.');

        // the form is rendered
        return $this->render('user/verified.html.twig');
    }
}
