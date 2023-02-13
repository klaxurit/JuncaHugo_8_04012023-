<?php

namespace Tests\AppBundle\Repository;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;
    private $userRepository;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->userRepository = $this->getContainer()->get(UserRepository::class);
    }

    public function testSaveUser()
    {
        $user = (new User())
            ->setUsername('SaveUsername')
            ->setEmail('saveuser@test.test')
            ->setPassword('password');
        $this->userRepository->save($user, true);
        $this->assertEquals($user->getUsername(), 'SaveUsername');
        $this->userRepository->remove($user, true);
        $this->assertNull($user->getId());
    }
}