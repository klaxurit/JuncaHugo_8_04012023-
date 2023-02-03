<?php

namespace Tests\AppBundle\Controller;

use Liip\TestFixturesBundle\Services\DatabaseToolCollection;
use Liip\TestFixturesBundle\Services\DatabaseTools\AbstractDatabaseTool;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    /** @var AbstractDatabaseTool */
    protected $databaseTool;
    protected $client;

    public function setUp(): void
    {
        // parent::setUp();
        $this->client = $this->createClient();
        $this->databaseTool = static::getContainer()->get(DatabaseToolCollection::class)->get();
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
        $this->databaseTool->loadFixtures([
            // __DIR__ . '/fixtures/User.yaml'
            'App\DataFixtures\AppFixtures'
        ]);
        $this->client->request('GET', '/login');
        $this->client->submitForm('Se connecter', [
            '_username' => 'Administrateur',
            '_password' => 'password',
        ]);
        
        $this->client->followRedirect();
        // $this->assertSelectorTextContains('h1', "Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !");
        $this->assertRouteSame('homepage');
    }
}