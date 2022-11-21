<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleBrowsers;
use A17\Twill\Repositories\Behaviors\HandleRelatedBrowsers;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Member;

class MemberRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;


    public function __construct(Member $model)
    {
        $this->model = $model;
    }

    protected $relatedBrowsers = ['gruppiMerceologici'];

    // all published members

    public function allMembers()
    {

        return $this->model->published()->orderBy('title')->get();
    }
}
