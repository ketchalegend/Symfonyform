<?php
/**
 * Created by PhpStorm.
 * User: eketchabepa
 * Date: 08.10.2018
 * Time: 11:54
 */

namespace App\Controller;


use App\Entity\User;
use App\Event\UserRegisterEvent;
use App\Form\UserType;
use App\Security\TokenGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     */
    public function register(UserPasswordEncoderInterface $passwordEncoder, Request $request, EventDispatcherInterface $eventDispatcher, TokenGenerator $tokenGenerator )
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword(
                $user,
                $user->getPassword()
            );
            $user->setPassword($password);
             $user->setRoles(array('ROLE_USER'));
            $user->setConfirmationToken($tokenGenerator->getRandomSecureToken( 30));



            $entitymanager = $this->getDoctrine()->getManager();
            $entitymanager->persist($user);
            $entitymanager->flush();

            $userRegisterEvent = new UserRegisterEvent($user);
            $eventDispatcher->dispatch(UserRegisterEvent::NAME, $userRegisterEvent);

            $this->redirect('create');
        }

        return $this->render('register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}