<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class GruppiMerceologici extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'subtitle'

    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'thumbnail' => [
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
