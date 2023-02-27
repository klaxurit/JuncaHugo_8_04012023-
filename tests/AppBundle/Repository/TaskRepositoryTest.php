<?php

namespace Tests\AppBundle\Repository;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TaskRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;
    private $taskRepository;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->taskRepository = $this->getContainer()->get(TaskRepository::class);
    }

    public function testSaveTask()
    {
        $task = (new Task())
            ->setTitle('Save task title')
            ->setContent('Save task content');
        $this->taskRepository->save($task, true);
        $this->assertEquals($task->getTitle(), 'Save task title');
        $this->taskRepository->remove($task, true);
        $this->assertNull($task->getId());
    }
}