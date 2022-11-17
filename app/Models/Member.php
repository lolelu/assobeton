<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Member extends Model implements Sortable
{
    use HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'email',
        'phone',
        'website',
        'address',
        'region',
        'group',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'logo' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],

        'carousel' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                    'max' => 5,
                ],
            ],
        ],
    ];
}
