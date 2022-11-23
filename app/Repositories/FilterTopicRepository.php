<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\FilterTopic;

class FilterTopicRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(FilterTopic $model)
    {
        $this->model = $model;
    }

    public function allPublished()
    {
        return $this->model->published()->orderBy('position')->get();
    }
}
