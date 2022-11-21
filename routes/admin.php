<?php

use Google\Service\AnalyticsData\Row;
use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');

// Register Twill routes here eg.
Route::module('members');

Route::module('events');

Route::group(['prefix' => 'settings'], function () {
    Route::module('seoData');
    Route::module('metadata');
});

Route::group(['prefix' => 'static'], function () {
    Route::group(['prefix' => 'associazione'], function () {
        Route::module('chiSiamo');
        Route::module('storia');
        Route::module('organigramma');
    });
    Route::module('gruppiMerceologicis');
    Route::module('servizi');
    Route::module('contatti');
    Route::module('registrazione');
    Route::group(['prefix' => 'privacy'], function () {
        Route::module('privacy');
        Route::module('cookie');
    });
});

Route::group(['prefix' => 'content'], function () {
    Route::module('pubblicazioni');
    Route::module('indici');

    Route::module('comunicatiStampa');
    //Route::module('circolari');
});
