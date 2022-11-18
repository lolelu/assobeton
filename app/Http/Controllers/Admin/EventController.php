<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class EventController extends BaseModuleController
{
    protected $moduleName = 'events';

    protected $indexColumns = [
        'logo' => [
            'thumb' => true,

            'variant' => [
                'role' => 'cover',
                'crop' => 'default',

            ],
        ],
        'title' => [
            'title' => 'Titolo',
            'field' => 'title',
            'sort' => true,
        ],
        'subtitle' => [
            'title' => 'Sottotitolo',
            'field' => 'subtitle',
            'sort' => true,
        ],
        'description' => [
            'title' => 'Descrizione',
            'field' => 'description',
            'sort' => true,
        ],

        'thematic' => [
            'title' => 'Area di interesse',
            'field' => 'thematic',
            'sort' => true,
        ],



    ];
}
