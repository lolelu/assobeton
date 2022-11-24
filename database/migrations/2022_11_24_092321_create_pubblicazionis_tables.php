<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubblicazionisTables extends Migration
{
    public function up()
    {
        Schema::create('pubblicazionis', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();


            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->string('author')->nullable();
            $table->text('description')->nullable();


            $table->boolean('private')->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('pubblicazioni_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'pubblicazioni');
        });

        Schema::create('pubblicazioni_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'pubblicazioni');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pubblicazioni_revisions');
        Schema::dropIfExists('pubblicazioni_slugs');
        Schema::dropIfExists('pubblicazionis');
    }
}
