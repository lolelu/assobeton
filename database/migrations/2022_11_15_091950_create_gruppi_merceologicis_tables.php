<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruppiMerceologicisTables extends Migration
{
    public function up()
    {
        Schema::create('gruppi_merceologicis', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();

            $table->text('template')->nullable();

            $table->string('subtitle', 200)->nullable();
        });

        Schema::create('gruppi_merceologici_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'gruppi_merceologici');
        });

        Schema::create('gruppi_merceologici_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'gruppi_merceologici');
        });
    }

    public function down()
    {
        Schema::dropIfExists('gruppi_merceologici_revisions');
        Schema::dropIfExists('gruppi_merceologici_slugs');
        Schema::dropIfExists('gruppi_merceologicis');
    }
}
