<?php

namespace App\Users\Domain\Entity;

use App\Shared\Domain\Service\UlidService;

class User
{
  private string $id;
  private string $email;
  private ?string $password = null;

  public function __construct(string $email, string $password)
  {
    $this->id = UlidService::generate();
    $this->email = $email;
    $this->password = $password;
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


}
