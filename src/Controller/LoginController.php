<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{
    /**
     * @var \Twig_Environment
     */
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/logine", name="login")
     */
    public function login(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();

        $lastusername = $utils->getLastUsername();

        return new Response(
            $this->twig->render(
                'login/login.html.twig', [
            'title' => 'Hubot | Login',
            'error' => $error,
            'last_username' => $lastusername
        ]));
    }
    /**
     * @Route("/logout", name="logout")
     */

    public function logout()
    {

    }

    /**
     * @Route("/confirm/{token}", name="security_confirm")
     */
    public function confirm(string $token, UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $user = $userRepository->findOneBy([
            'confirmationToken' => $token
        ]);

        if (null !== $user) {
            $user->setEnabled(true);
            $user->setConfirmationToken('');

            $entityManager->flush();
        }
            return new Response(
                $this->twig->render(
                    'confirmation.html.twig',[
                'user' => $user
            ]));
    }
}
