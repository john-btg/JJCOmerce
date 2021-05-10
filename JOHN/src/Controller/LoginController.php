<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class   LoginController extends AbstractController
{
//    /**
//     * @Route("/login", name="app_login")
//     */
//    public function login(AuthenticationUtils $authenticationUtils): Response
//    {
//        // Si l'utilisateur est connecté, pas besoin d'afficher le formulaire de connexion
//         if ($this->getUser()) {
//             return $this->redirectToRoute('TestApi');
//         }
//
//        // get the login error if there is one
//        $error = $authenticationUtils->getLastAuthenticationError();
//        // last username entered by the user
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
//    }
    /**
     * @Route("/api/login", name="login")
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
        $user = $this->getUser();
        return $this->json(array(
            'username' => $user->getUsername(),
            'roles' => $user->getRoles(),
        ));

    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
//        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
