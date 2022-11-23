<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Relation::morphMap([
            'events' => 'App\Models\Event',
            'members' => 'App\Models\Member',
            'gruppiMerceologicis' => 'App\Models\GruppiMerceologici',
            'filterTopics' => 'App\Models\FilterTopic',
        ]);
    }
}
