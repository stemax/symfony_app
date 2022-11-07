<?php

namespace App\Users\Infrastructure\Adapters;

use App\ModuleX\Infrastructure\API\API;

class ModuleXAdapter
{
  public function __construct(private readonly API $moduleXApi)
  {
  }

  public function getSomeData():array
  {
    $dataFromAPI = $this->moduleXApi->getSomeData();
    //mapping
    return [];
  }
}
