<?php

namespace Tests\AppBundle\Controller;

use App\Repository\TaskRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    protected $client;
    protected $taskRepository;

    public function setUp(): void
    {
        $this->client = $this->createClient();
        $this->taskRepository = $this->getContainer()->get(TaskRepository::class);
    }

    public function testShowTasksList()
    {
        $this->client->request('GET', '/tasks');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertRouteSame('task_list');
    }

    public function testCreateTask()
    {
        $crawler = $this->client->request('GET', '/tasks/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'task[title]' => 'New task title',
            'task[content]' => 'New content title'
        ]);
        $this->client->submit($form);
        $this->client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Liste des tâches');
    }
}