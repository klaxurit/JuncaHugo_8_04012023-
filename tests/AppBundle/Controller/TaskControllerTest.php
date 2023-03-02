<?php

namespace Tests\AppBundle\Controller;

use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    protected $client;
    protected $taskRepository;
    protected $userRepository;

    public function setUp(): void
    {
        $this->client = $this->createClient();
        $this->taskRepository = $this->getContainer()->get(TaskRepository::class);
        $this->userRepository = $this->getContainer()->get(UserRepository::class);
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

        $createdTask = $this->taskRepository->findOneByTitle('New task title');
        $this->assertNotNull($createdTask);
        $this->assertSelectorTextContains('h1', 'Liste des tâches');
    }

    public function testEditAnonymousTask()
    {
        $task = $this->taskRepository->findOneByTitle('task title test');
        $this->assertNull($task->getUser());
        $crawler = $this->client->request('GET', '/tasks/' . $task->getId() . '/edit');
        $form = $crawler->selectButton('Modifier')->form([
            'task[title]' => 'Edited test title',
            'task[content]' => 'Edited test content'
        ]);
        $this->client->submit($form);
        $this->client->followRedirect();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $editedTask = $this->taskRepository->findOneByTitle('Edited test title');
        $this->assertEquals($editedTask->getTitle(), 'Edited test title');
        $this->assertEquals($editedTask->getUser()->getEmail(), 'utilisateur@anonyme.com');
    }

    public function testToggledTask()
    {
        $task = $this->taskRepository->findOneByTitle('New task title');
        $this->client->request('GET', '/tasks/' . $task->getId() . '/toggle');
        $this->client->followRedirect();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        
        $updatedTask = $this->taskRepository->findOneByTitle('New task title');
        $this->assertTrue($updatedTask->isDone());
    }

    public function testVisitorDeleteTask()
    {
        $task = $this->taskRepository->findOneByTitle('New task title');
        $this->client->request('GET', '/tasks/' . $task->getId() . '/delete');
        $this->client->followRedirect();
        $this->assertRouteSame('app_login');
        $this->assertNotNull($task->getId());
    }

    public function testUserDeleteTask()
    {
        $task = $this->taskRepository->findOneByTitle('New task title');
        $user = $this->userRepository->findOneBy(["email" => "user@user.test"]);
        $this->client->loginUser($user);
        $this->client->request('GET', '/tasks/' . $task->getId() . '/delete');
        $this->assertResponseStatusCodeSame(Response::HTTP_FORBIDDEN);
        $this->assertNotNull($task->getId());
    }

    public function testAdminDeleteTask()
    {
        $task = $this->taskRepository->findOneByTitle('New task title');
        $user = $this->userRepository->findOneBy(["email" => "admin@admin.test"]);
        $this->client->loginUser($user);
        $this->client->request('GET', '/tasks/' . $task->getId() . '/delete');
        $this->client->followRedirect();
        $this->taskRepository->remove($task);
        $user->removeTask($task);
        $this->assertTrue($user->getTasks()->count() == 0);
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertNull($task->getId());
    }
    
    public function testAuthorDeleteTask()
    {
        $task = $this->taskRepository->findOneByTitle('User task title');
        $user = $task->getUser();
        $this->assertEquals($task->getUser(), $user);
        $this->client->loginUser($user);
        $this->client->request('GET', '/tasks/' . $task->getId() . '/delete');
        $this->client->followRedirect();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertNull($task->getId());
    }
}