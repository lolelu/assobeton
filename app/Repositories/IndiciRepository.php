<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Indici;

class IndiciRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Indici $model)
    {
        $this->model = $model;
    }


    public function allPublished()
    {

        return $this->model
            ->where('published', true)
            ->where([

                ['publish_start_date', '<=', date('Y-m-d H:i:s')],
                ['publish_end_date', '>=', date('Y-m-d H:i:s')],
            ])
            ->orWhere(function ($query) {
                $query->whereNull('publish_start_date')
                    ->whereNull('publish_end_date');
            })
            ->orWhere(function ($query) {
                $query->whereNull('publish_start_date')
                    ->where('publish_end_date', '>=', date('Y-m-d H:i:s'));
            })
            ->orWhere(function ($query) {
                $query->where('publish_start_date', '<=', date('Y-m-d H:i:s'))
                    ->whereNull('publish_end_date');
            })
            ->orderBy('publish_start_date', 'desc')
            ->get();
    }


    // all published non private 

    public function allPublishedNonPrivate()
    {
        return $this->allPublished()->whereIn('private', false);
    }
}
