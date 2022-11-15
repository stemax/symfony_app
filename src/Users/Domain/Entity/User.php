<?php

namespace App\Users\Domain\Entity;

use App\Shared\Domain\Security\AuthUserInterface;
use App\Shared\Domain\Service\UlidService;

class User implements AuthUserInterface
{
  private string $id;
  private string $email;
  private ?string $password = null;

  public function __construct(string $email)
  {
    $this->id = UlidService::generate();
    $this->email = $email;
  }

  /**
   * @return string
   */
  public function getId(): string
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @return string|null
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  public function getRoles(): array
  {
    return [
      'ROLE_USER',
    ];
  }

  public function eraseCredentials()
  {
    // TODO: Implement eraseCredentials() method.
  }

  public function getUserIdentifier(): string
  {
    return $this->email;
  }

  public function setPassword(?string $password, \App\Users\Domain\Service\UserPasswordHasherInterface $passwordHasher): void
  {
    if (is_null($password)) {
      $this->password = null;
    }

    $this->password = $passwordHasher->hash($this, $password);
  }


}
