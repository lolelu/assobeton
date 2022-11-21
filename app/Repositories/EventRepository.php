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

    protected $relatedBrowsers = ['groups'];

    public function __construct(Event $model)
    {
        $this->model = $model;
    }

    // all published events

    public function allPublished()
    {
        return $this->model->published()->orderBy('position')->get();
    }

    // all published non private 

    public function allPublishedNonPrivate()
    {
        return $this->model->published()->where('private', 0)->orderBy('position')->get();
    }
}
