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

    // TODO: Utile per il prefill dei blocchi

    // public function afterSave($object, $fields)
    // {
    //     parent::afterSave($object, $fields);

    //     if ($object->wasRecentlyCreated) {
    //         $object->prefillBlockSelection();
    //     }
    // }


    public function allPublished()
    {
        return $this->model->published()->orderBy('position')->get();
    }
}
