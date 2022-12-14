<?php

namespace Functional\Users\Application\Command;

use PHPUnit\Framework\TestCase;

use App\Shared\Application\Command\CommandBusInterface;
use App\Users\Application\Command\CreateUser\CreateUserCommand;
use App\Users\Domain\Repository\UserRepositoryInterface;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateUserCommandHandlerTest extends WebTestCase
{
  public function setUp(): void
  {
    parent::setUp();
    $this->faker = Factory::create();
    $this->commandBus = $this::getContainer()->get(CommandBusInterface::class);
    $this->userRepository = $this::getContainer()->get(UserRepositoryInterface::class);
  }

  public function test_user_created_successfully(): void
  {
    $command = new CreateUserCommand($this->faker->email(), $this->faker->password());

    // act
    $userUlid = $this->commandBus->execute($command);

    // assert
    $user = $this->userRepository->findById($userUlid);
    $this->assertNotEmpty($user);
  }
}
