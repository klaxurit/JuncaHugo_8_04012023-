<?php

namespace Tests\AppBundle\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserControllerTest extends WebTestCase
{
    protected $client;
    protected $userRepository;

    public function setUp(): void
    {
        $this->client = $this->createClient();
        $this->userRepository = $this->getContainer()->get(UserRepository::class);
    }

    public function connectAdminUser()
    {
        $admin = $this->userRepository->findOneBy(["email" => "admin@admin.test"]);
        $this->client->loginUser($admin);
    }

    public function connectUser()
    {
        $user = $this->userRepository->findOneBy(["email" => "user@user.test"]);
        $this->client->loginUser($user);
    }

    public function testShowUsersListAsAdmin()
    {
        $this->connectAdminUser();
        $this->client->request('GET', '/users');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertSelectorTextContains('h1', 'Liste des utilisateurs');
    }

    public function testShowUsersListAsUser()
    {
        $this->connectUser();
        $this->client->request('GET', '/users');
        $this->assertResponseStatusCodeSame(Response::HTTP_FORBIDDEN);
    }

    public function testCreateUser()
    {
        $this->connectAdminUser();
        $crawler = $this->client->request('GET', '/users/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => 'John',
            'user[password][first]' => 'password',
            'user[password][second]' => 'password',
            'user[email]' => 'john@mail.com',
            'user[roles]' => 'ROLE_USER',
        ]);
        $this->client->submit($form);
        $this->client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Liste des utilisateurs');
    }

    public function testEditUser()
    {
        $this->connectAdminUser();
        $user = $this->userRepository->findOneBy(["email" => "john@mail.com"]);
        $userId = $user->getId();
        $crawler = $this->client->request('GET', '/users/' . $userId . '/edit');
        $form = $crawler->selectButton('Modifier')->form([
            'user[username]' => 'JohnEdited',
            'user[password][first]' => 'password',
            'user[password][second]' => 'password',
            'user[email]' => 'john@mail.com',
            'user[roles]' => 'ROLE_USER',
        ]);
        $this->client->submit($form);
        $this->client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Liste des utilisateurs');
    }
}