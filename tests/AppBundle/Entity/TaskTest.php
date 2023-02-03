<?php
namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\User;
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

    public function testGetId() {
        $id = $this->getEntity()->getId();
        $this->assertEquals($id, 1);
    }

    public function testGetTitle() {
        $title = $this->getEntity()->getTitle();
        $this->assertEquals($title, 'TaskTest');
    }

    public function testGetContent() {
        $content = $this->getEntity()->getContent();
        $this->assertEquals($content, 'Task content test');
    }

    public function testGetCreatedAt() {
        $date = new \DateTime();
        $task = $this->getEntity()->setCreatedAt($date);
        $createdAt = $task->getCreatedAt();
        $this->assertEquals($createdAt, $date);
    }

    public function testIsDone() {
        $task = $this->getEntity();
        $task->toggle(true);
        $this->assertTrue($task->isDone());
    }
}