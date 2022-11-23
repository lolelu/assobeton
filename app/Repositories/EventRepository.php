<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleTags;

use A17\Twill\Repositories\ModuleRepository;
use App\Models\Event;

class EventRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions, HandleTags;

    protected $relatedBrowsers = ['filterTopic'];

    public function __construct(Event $model)
    {
        $this->model = $model;
    }

    // all published events

    // all published before today or without publish date

    // public function allPublishedOld()
    // {
    //     return $this->model
    //         ->where('published', true)
    //         ->where([
    //             ['publish_start_date', '<=', date('Y-m-d')],
    //             ['publish_end_date', '>=', date('Y-m-d')],
    //         ])
    //         ->orWhereNull('publish_start_date')
    //         ->orWhereNull('publish_end_date')

    //         ->orderBy('publish_start_date', 'desc')
    //         ->get();
    // }

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
        return $this->allPublished()->where('private', false)->get();
    }
}
