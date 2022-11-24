<?php

use Google\Service\AnalyticsData\Row;
use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');


// Register Twill routes here eg.

Route::group(['prefix' => 'pagine'], function () {
    Route::group(['prefix' => 'associazione'], function () {
        Route::module('chiSiamo');
        Route::module('storia');
        Route::module('organigramma');
    });
    Route::module('homepage');
    Route::module('gruppiMerceologicis');
    Route::module('servizi');
    Route::module('centoVantaggi');
    Route::module('registrazione');
    Route::module('contatti');
});

Route::module('members');

Route::group(['prefix' => 'contenuti'], function () {
    Route::group(['prefix' => 'eventi'], function () {
        Route::module('events');
        Route::module('filterTopics');
    });
    Route::module('filterTopics');

    Route::group(['prefix' => 'pubblicazioni'], function () {
        Route::module('pubblicazionis');
        Route::module('filterTopics');
    });
    Route::group(['prefix' => 'comunicatiStampa'], function () {
        Route::module('comunicatiStampa');
        Route::module('filterTopics');
    });
    Route::group(['prefix' => 'indici'], function () {
        Route::module('indici');
        Route::module('filterTopics');
    });

    Route::group(['prefix' => 'circolari'], function () {
        Route::module('circolari');
    });
});

Route::group(['prefix' => 'asol-est'], function () {
});











// Route::group(['prefix' => 'settings'], function () {
//     Route::module('seoData');
//     Route::module('metadata');
//     Route::group(['prefix' => 'privacy'], function () {
//         Route::module('privacy');
//         Route::module('cookie');
//     });
// });



   
    //Route::module('news');