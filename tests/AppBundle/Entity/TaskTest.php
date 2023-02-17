<?php
namespace App\Tests\Entity;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TaskTest extends KernelTestCase
{
    const CURRENT_DATE = "2023-02-13 14:29:37";

    public function getEntity(): Task {
        return (new Task())
        ->setId(1)
        ->setTitle('TaskTest')
        ->setContent('Task content test')
        ->setCreatedAt(new \DateTime(self::CURRENT_DATE));
    }
    
    public function testTaskGetterAndSetters() {
        $task = $this->getEntity();
        $this->assertFalse($task->isDone());
        $this->assertEquals($task->getCreatedAt(), new \DateTime(self::CURRENT_DATE));
        $this->assertEquals(1, $task->getId());
        $this->assertEquals($task->getTitle(), 'TaskTest');
        $this->assertEquals($task->getContent(), 'Task content test');
    }
}