<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Member;

class MemberRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Member $model)
    {
        $this->model = $model;
    }

    // all published members

    public function allPublished()
    {
        return $this->model->published()->get();
    }

    // all published members with a specific group


    public function allPublishedByGroup($group)
    {
        return $this->model->published()->where('group', $group)->get();
    }

    // all published members with a specific region

    public function allPublishedByRegion($region)
    {
        return $this->model->published()->where('region', $region)->get();
    }

    // all published members with a specific region and group

    public function allPublishedByRegionAndGroup($region, $group)
    {
        return $this->model->published()->where('region', $region)->where('group', $group)->get();
    }

    //return a member by its slug

    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
