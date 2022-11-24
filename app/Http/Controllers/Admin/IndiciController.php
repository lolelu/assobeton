<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class IndiciController extends BaseModuleController
{
    protected $moduleName = 'indicis';

    protected $permalinkBase = 'indici';

    protected $titleColumnKey = 'title';

    protected $indexOptions = [
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
        'publish_start_date' => [
            'title' => 'Data di pubblicazione',
            'field' => 'publish_start_date',
            'sort' => true,
        ],
    ];
}
