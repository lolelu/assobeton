<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunicatiStampasTables extends Migration
{
    public function up()
    {
        Schema::create('comunicati_stampas', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->text('description')->nullable();


            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();

            $table->boolean('private')->nullable();


            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('comunicati_stampa_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'comunicati_stampa');
        });

        Schema::create('comunicati_stampa_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'comunicati_stampa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comunicati_stampa_revisions');
        Schema::dropIfExists('comunicati_stampa_slugs');
        Schema::dropIfExists('comunicati_stampas');
    }
}
