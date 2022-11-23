<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class FilterTopic extends Model implements Sortable
{
    use HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $mediasParams = [
        'icon' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],

    ];
}
