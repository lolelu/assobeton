<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\GruppiMerceologici;

class GruppiMerceologiciRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleRevisions;

    public function __construct(GruppiMerceologici $model)
    {
        $this->model = $model;
    }


    public function allPublished()
    {
        return $this->model->published()->orderBy('position')->get();
    }
}
