<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model implements Sortable
{
    use HasSlug, HasMedias, HasPosition, HasFactory, HasRelated;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'email',
        'phone',
        'website',
        'linkedin',
        'address',
        'region',

        'type',
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
