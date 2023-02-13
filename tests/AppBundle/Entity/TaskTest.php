<?php
namespace App\Tests\Entity;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TaskTest extends KernelTestCase
{
    public function getEntity(): Task {
        return (new Task())
        ->setId(1)
        ->setTitle('TaskTest')
        ->setContent('Task content test')
        ->setCreatedAt(new \DateTime());
    }

    public function testTaskGetterAndSetters() {
        $task = $this->getEntity();
        $date = new \DateTime();
        $task->setCreatedAt($date);
        $createdAt = $task->getCreatedAt();
        $task->toggle(true);
        $this->assertTrue($task->isDone());
        $this->assertEquals($createdAt, $date);
        $this->assertEquals(1, $task->getId());
        $this->assertEquals($task->getTitle(), 'TaskTest');
        $this->assertEquals($task->getContent(), 'Task content test');
    }
}