<?php

namespace Tests\AppBundle\Controller;

use Liip\TestFixturesBundle\Services\DatabaseToolCollection;
use Liip\TestFixturesBundle\Services\DatabaseTools\AbstractDatabaseTool;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    protected $databaseTool;

    public function setUp(): void
    {
        $this->databaseTool = static::getContainer()->get(DatabaseToolCollection::class)->get();
    }

    public function testLoginPage(): void
    {
        $client = static::createClient();
        $client->request('GET', '/login');

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertSelectorTextContains('button', 'Se connecter');
        $this->assertSelectorNotExists('.alert.alert-danger');
    }

    public function testLoginWithBadCredentials() 
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'Administrateur',
            '_password' => 'wrongpassword'
        ]);
        $client->submit($form);
        $client->followRedirect();
        $this->assertRouteSame('app_login');
        $this->assertSelectorExists('.alert.alert-danger');
    }

    public function testLoginWithGoodCredentials()
    {
        $client = static::createClient();
        $this->databaseTool->loadFixtures([
            'Bamarni\MainBundle\DataFixtures\ORM\LoadData',
            'Me\MyBundle\DataFixtures\ORM\LoadData'
        ]);
        $client->request('GET', '/login');
        $client->submitForm('Se connecter', [
            '_username' => 'Administrateur',
            '_password' => 'password',
        ]);
        
        $client->followRedirect();
        $this->assertRouteSame('homepage');
    }

    // public function testRedirectAfterLogin() {
    //     $client = static::createClient();
    //     $client->request('GET', '/login');
    //     $this->assertResponseRedirects('/');
    // }
}