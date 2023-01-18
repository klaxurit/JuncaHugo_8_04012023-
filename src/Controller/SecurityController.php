<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[AsController]
class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'login')]
    public function loginAction(AuthenticationUtils $authenticationUtils, #[CurrentUser] ?User $user): Response
    {
        if (null === $user) {
            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();
            dd($lastUsername);
    
            return $this->render('security/login.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error,
            ]);
        }
        return $this->render('default/index.html.twig');
    }

    // #[Route(path: '/login_check', name: 'login_check')]
    // public function loginCheck()
    // {
    //     // This code is never executed.
    // }

    #[Route(path: '/logout', name: 'logout', methods: ['GET'])]
    public function logout()
    {
        // This code is never executed.
    }
}
