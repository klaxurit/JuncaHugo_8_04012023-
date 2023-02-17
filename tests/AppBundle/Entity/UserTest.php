<?php
namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    public function createTask(): Task {
        return (new Task())
        ->setTitle('TaskTest')
        ->setContent('Task content test');
    }

    public function getEntity(): User {
        return (new User())
        ->setId(1)
        ->setUsername('Usertest')
        ->setEmail('usertest@domain.fr')
        ->setPassword('password')
        ->setRoles(['ROLE_USER'])
        ->addTask($this->createTask());
    }

    public function testUserGettersAndSetters() {
        $user = $this->getEntity();
        $this->assertEquals($user->getUsername(), 'Usertest');
        $this->assertEquals($user->getId(), '1');
        $this->assertEquals($user->getUserIdentifier(), 'Usertest');
        $this->assertEquals($user->getEmail(), 'usertest@domain.fr');
        $this->assertNull($user->getSalt());
        $this->assertEquals($user->getPassword(), 'password');
        $this->assertNull($user->eraseCredentials());
    }
}