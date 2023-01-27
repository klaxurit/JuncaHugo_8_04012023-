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

    public function testCreateAdminUser() {
        $user = $this->getEntity()->setRoles(['ROLE_ADMIN']);
        $this->assertContains('ROLE_ADMIN', $user->getRoles());
        $this->assertContains('ROLE_USER', $user->getRoles());
    }

    public function testCreateBasicUser() {
        $user = $this->getEntity();
        $this->assertContains('ROLE_USER', $user->getRoles());
        $this->assertNotContains('ROLE_ADMIN', $user->getRoles());
    }

    public function testAddTask() {
        $user = $this->getEntity()->addTask($this->createTask());
        $task = $user->getTasks();
        $this->assertCount(2, $task);
    }

    public function testRemoveTask() {
        $user = $this->getEntity();
        $task = $this->createTask();
        $user->addTask($task);
        $user->removeTask($task);
        $this->assertNull($task->getUser());
        $this->assertCount(1, $this->getEntity()->getTasks());
    }

    public function testGetUsername() {
        $username = $this->getEntity()->getUsername();
        $this->assertEquals($username, 'Usertest');
    }

    public function testGetId() {
        $id = $this->getEntity()->getId();
        $this->assertEquals($id, '1');
    }

    public function testGetUserIdentifier() {
        $userIdentifier = $this->getEntity()->getUserIdentifier();
        $this->assertEquals($userIdentifier, 'Usertest');
    }

    public function testGetEmail() {
        $email = $this->getEntity()->getEmail();
        $this->assertEquals($email, 'usertest@domain.fr');
    }

    public function testGetSalt() {
        $salt = $this->getEntity()->getSalt();
        $this->assertNull($salt);
    }

    public function testGetPassword() {
        $password = $this->getEntity()->getPassword();
        $this->assertEquals($password, 'password');
    }

    public function testEraseCredentials() {
        $this->assertNull($this->getEntity()->eraseCredentials());
    }
}