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

            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->text('description')->nullable();


            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();

            $table->boolean('event')->nullable();

            $table->timestamp('event_date')->nullable();

            $table->boolean('private')->nullable();


            $table->integer('position')->unsigned()->nullable();
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
