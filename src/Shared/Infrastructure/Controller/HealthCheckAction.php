<?php
namespace App\Shared\Infrastructure;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/health-check','health_check')]
class HealthCheckAction
{
  public function __invoke():Response
  {
    return new JsonResponse(['status' => 'ok']);
  }
}
