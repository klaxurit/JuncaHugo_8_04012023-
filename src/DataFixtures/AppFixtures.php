<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        $listUser = [];
        // Create admin user
        $user = new User();
        $user->setUsername("Administrateur");
        $user->setEmail("utilisateur@admin.com");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword($this->userPasswordHasher->hashPassword($user, "password"));
        $manager->persist($user);
        $listUser[] = $user;

        // Create normal users
        $user = new User();
        $user->setUsername("Utilisateur");
        $user->setEmail("utilisateur@basic.com");
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword($this->userPasswordHasher->hashPassword($user, "password"));
        $manager->persist($user);
        $listUser[] = $user;
        
        $user = new User();
        $user->setUsername("UtilisateurAnonyme");
        $user->setEmail("utilisateur@anonyme.com");
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword($this->userPasswordHasher->hashPassword($user, "password"));
        $manager->persist($user);
        $listUser[] = $user;

        for ($i = 0; $i < 20; $i++) {
            $task = new Task();
            $task->setTitle('task title'.$i);
            $task->setContent('task content '.$i);
            $task->setUser($listUser[array_rand($listUser)]);
            
            $manager->persist($task);
        }

        $manager->flush();
    }
}
