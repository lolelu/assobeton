<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class MemberController extends BaseModuleController
{
    protected $moduleName = 'members';

    protected $titleColumnKey = 'title';

    protected $indexOptions = [];

    protected $indexColumns = [
        'logo' => [
            'thumb' => true,

            'variant' => [
                'role' => 'logo',
                'crop' => 'default',

            ],
        ],
        'title' => [
            'title' => 'Nome',
            'field' => 'title',
            'sort' => true,
        ],
        'group' => [
            'title' => 'Gruppo',
            'field' => 'group',
            'sort' => true,
        ],

        'region' => [
            'title' => 'Regione',
            'field' => 'region',
            'sort' => true,
        ],


        'address' => [
            'title' => 'Indirizzo',
            'field' => 'address',
            'sort' => true,
        ],
    ];
}
