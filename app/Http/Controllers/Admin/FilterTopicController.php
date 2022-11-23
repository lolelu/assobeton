<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class FilterTopicController extends BaseModuleController
{
    protected $moduleName = 'filterTopics';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
