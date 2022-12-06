<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class EventController extends BaseModuleController
{
    protected $moduleName = 'events';

    protected $permalinkBase = 'news_eventi';

    protected $titleColumnKey = 'title';

    protected $indexOptions = [
        'reorder' => true,
        'publish' => false,
        'bulkPublish' => false,
        'bulkDelete' => true,
        'permalink' => true,

    ];

    protected $browserColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
    ];

    protected $indexColumns = [


        'logo' => [
            'thumb' => true,

            'variant' => [
                'role' => 'cover',
                'crop' => 'mobile',

            ],
        ],
        'published' => [
            'title' => 'Stato',
            'field' => 'isPublished',
            'sort' => true,

        ],

        'type' => [ // presenter column
            'title' => 'Tipologia',
            'field' => 'type',
        ],
        'relatedBrowserFieldName' => [ // related browser column
            'title' => 'Tematica',
            'field' => 'title',
            'relatedBrowser' => 'filterTopic',
            'sort' => true,
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

        'publish_start_date' => [
            'title' => 'Data di pubblicazione',
            'field' => 'publish_start_date',
            'sort' => true,
        ],

        'publish_end_date' => [
            'title' => 'Data di scadenza',
            'field' => 'publish_end_date',
            'sort' => true,
        ],
    ];
}
