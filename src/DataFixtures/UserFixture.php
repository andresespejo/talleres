<?php

namespace App\DataFixtures;

use App\Entity\Usuarios;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        
        $user = new Usuarios();

        $user->setUsername('mamuchi');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'T@lleres001')
        );
        $user->setEmail(TRUE);

        $manager->persist($user);

        $manager->flush();
    }
}
