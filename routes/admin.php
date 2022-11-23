<?php

use Google\Service\AnalyticsData\Row;
use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');

// Register Twill routes here eg.
Route::group(['prefix' => 'associazione'], function () {
    Route::module('chiSiamo');
    Route::module('storia');
    Route::module('organigramma');
});

Route::module('filterTopics');

Route::module('members');
Route::module('gruppiMerceologicis');
Route::module('servizi');
Route::module('pubblicazioni');
Route::module('registrazione');
Route::module('contatti');
Route::module('events');
Route::module('comunicatiStampa');
Route::module('indici');


Route::group(['prefix' => 'settings'], function () {
    Route::module('seoData');
    Route::module('metadata');
    Route::group(['prefix' => 'privacy'], function () {
        Route::module('privacy');
        Route::module('cookie');
    });
});



    //Route::module('circolari');
    //Route::module('news');