<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Database\Factories\EventFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Behaviors\HasRelated;


class Event extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition, HasFactory, HasRelated;

    /**
     * Get the name of the index associated with the model.
     *
     * @return string
     */



    protected static function newFactory()
    {
        return EventFactory::new();
    }

    public function getTypeAttribute()
    {
        if ($this->event == 1) {
            return "Evento";
        } else {
            return "News";
        }
    }

    public function getIsPublishedAttribute()
    {
        if ($this->published == 1) {
            return "Pubblicato";
        } else {
            return "Non Pubblicato";
        }
    }


    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'description',
        'private',
        'position',
        'tags',
        'event',
        'publish_start_date',
        'publish_end_date',
        'event_date',

    ];

    public $slugAttributes = [
        'title',
    ];

    public $filesParams = ['file'];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
