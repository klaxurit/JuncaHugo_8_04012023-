<?php

namespace Tests\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    protected $client;

    public function setUp(): void
    {
        $this->client = $this->createClient();
    }

    private function logIn() {
        $this->client->request('GET', '/login');
        $this->client->submitForm('Se connecter', [
            '_username' => 'Administrateur',
            '_password' => 'password',
        ]);
        $this->client->followRedirect();
    }

    public function testLoginPage(): void
    {
        $this->client->request('GET', '/login');

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertSelectorTextContains('button', 'Se connecter');
        $this->assertSelectorNotExists('.alert.alert-danger');
    }

    public function testLoginWithBadCredentials() 
    {
        $crawler = $this->client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'Administrateur',
            '_password' => 'wrongpassword'
        ]);
        $this->client->submit($form);
        $this->client->followRedirect();
        $this->assertRouteSame('app_login');
        $this->assertSelectorExists('.alert.alert-danger');
    }

    public function testLoginWithGoodCredentials()
    {
        $this->login();
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !");
        $this->assertRouteSame('homepage');
    }

    public function testLogOut() {
        $this->login();
        $this->client->request('GET', '/logout');
        $this->client->followRedirect();
        $this->assertResponseIsSuccessful();
    }
}