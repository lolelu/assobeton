<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTables extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            //tags 


            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();
            $table->string('tags')->nullable();

            // feel free to modify the name of this column, but description is supported by default (you would need to specify the name of the column Twill should consider as your "description" column in your module controller if you change it)

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('description')->nullable();

            $table->integer('position')->unsigned()->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('event_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'event');
        });

        Schema::create('event_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'event');
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_revisions');
        Schema::dropIfExists('event_slugs');
        Schema::dropIfExists('events');
    }
}
