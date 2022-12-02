<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Circolari;

class CircolariRepository extends ModuleRepository
{
    use HandleSlugs, HandleFiles;

    public function __construct(Circolari $model)
    {
        $this->model = $model;
    }
}
