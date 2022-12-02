<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

class Circolari extends Model
{
    use HasSlug, HasFiles;

    protected $fillable = [
        'published',
        'title',
        'description',
        'date',
        'destinatari',
        'area',
        'main_file'
    ];

    public $slugAttributes = [
        'title',
    ];
}
