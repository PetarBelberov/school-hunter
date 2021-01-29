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
