<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user ->setUsername('admin');

        $user->setPassword(
            $this->encoder->encodePassword($user, '12345678' )

        );

        $user->setEmail('e.ketchabepa@m3connect.de');
        $user->setRoles(array('ROLE_USER'));
        $user->setEnabled(true);

        $manager->persist($user);

        $manager->flush();
    }
}