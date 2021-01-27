<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\University;
use App\Entity\User;
use App\Form\UserEditFormType;
use App\Form\UserFormType;
use App\Form\ChangePasswordFormType;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Mailer\MailerInterface;


class UserController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
    * @Route("/register", name="user_registration")
    */
    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder, Security $security): Response
    {
        // if user is already logged in, don't display the login page again
        if ($security->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_index');
        }

        $user = new User();
        $user->setRoles(array('ROLE_USER'));
        $user->setUserType('other');
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
            'form_registration' => $form_registration->createView()
        ]);
    }

    /**
     * @Route("/profile", name="user_profile")
     */
    public function profile()
    {
        $user = $this->getUser();

        $this->getDoctrine()
            ->getRepository(University::class)
            ->findAll();

        $university_rating = $this->getDoctrine()
            ->getRepository(Rating::class)
            ->findBy(['user' => $user]);

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'university_rating' => $university_rating
        ]);
    }

    /**
     * @Route("/verify/email", name="user_verify_email")
     */
    public function verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY ');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('user_verify_email', $exception->getReason());

            return $this->redirectToRoute('user_verify_email');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success_reg', 'Registration completed successfully');
        $this->addFlash('success_email', 'Your email address has been verified.');

         // the form is rendered
         return $this->render('user/verified.html.twig');
    }

    /**
     * @Route("/profile/edit", methods="GET|POST", name="user_edit")
     */
    public function edit(Request $request): Response
    {
        $user = $this->getUser();

        $form_edit = $this->createForm(UserEditFormType::class, $user);
        $form_edit->handleRequest($request);

        if ($form_edit->isSubmitted() && $form_edit->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'user.updated_successfully');

            return $this->redirectToRoute('user_edit');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form_edit' => $form_edit->createView(),
        ]);
    }

     /**
     * @Route("/profile/change-password", methods="GET|POST", name="user_change_password")
     */
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder, MailerInterface $mailer): Response
    {
        $user = $this->getUser();

        $form_change_pass = $this->createForm(ChangePasswordFormType::class);
        $form_change_pass->handleRequest($request);

        if ($form_change_pass->isSubmitted() && $form_change_pass->isValid()) {
            $user->setPassword($encoder->encodePassword($user, $form_change_pass->get('newPassword')->getData()));

            $this->getDoctrine()->getManager()->flush();

            $email = (new TemplatedEmail())
            ->from(new Address('petar_belberov@gmx.com', 'Petar Belberov'))
            ->to($user->getEmail())
            ->subject('Your School Hunter account password has been changed')
            // path of the Twig template to render
            ->htmlTemplate('emails/confirmation_change_pass.html.twig')
            // pass variables to the template
            ->context([
                'user' => $user,
                date_default_timezone_set("Europe/Sofia"),
                'date' => date("H:i:s / d:m:Y")
            ]);

         $mailer->send($email);

            return $this->redirectToRoute('security_logout');
        }

        return $this->render('user/change_password.html.twig', [
            'form_change_pass' => $form_change_pass->createView(),
        ]);
    }


}
