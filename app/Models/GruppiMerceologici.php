<?php

namespace App\Models;

use A17\Twill\Models\Model;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Repositories\BlockRepository;
use A17\Twill\Models\Behaviors\HasRevisions;

class GruppiMerceologici extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'introduction',
        'applications',
        'position',
        'subtitle',
        'template'

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

    //TODO: Utile per il prefill dei blocchi

    // public const DEFAULT_TEMPLATE = 'full_article';

    // public const AVAILABLE_TEMPLATES = [
    //     [
    //         'value' => 'full_article',
    //         'label' => 'Articolo completo',
    //         'block_selection' => ['text', 'text', 'text', 'image'],
    //     ],
    //     [
    //         'value' => 'empty',
    //         'label' => 'Vuoto',
    //         'block_selection' => [],
    //     ],
    // ];

    // public const AVAILABLE_BLOCKS = [
    //     'text',
    //     'image',
    // ];

    // public function getTemplateLabelAttribute()
    // {
    //     $template = collect(static::AVAILABLE_TEMPLATES)->firstWhere('value', $this->template);

    //     return $template['label'] ?? '';
    // }

    // public function getTemplateBlockSelectionAttribute()
    // {
    //     $template = collect(static::AVAILABLE_TEMPLATES)->firstWhere('value', $this->template);

    //     return $template['block_selection'] ?? [];
    // }

    // public function prefillBlockSelection()
    // {
    //     $i = 1;

    //     foreach (['text', 'image'] as $blockType) {
    //         app(BlockRepository::class)->create([
    //             'blockable_id' => $this->id,
    //             'blockable_type' => 'gruppiMerceologicis',
    //             'position' => $i++,
    //             'content' => '{}',
    //             'type' => $blockType,
    //         ]);
    //     }
    // }
}
