<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('gruppi_merceologicis', function (Blueprint $table) {
            $table->text('template')->nullable();
            $table->string('introduction')->nullable();
            $table->string('applications')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gruppi_merceologicis', function (Blueprint $table) {
            $table->dropColumn('template');
            $table->dropColumn('introduction');
            $table->dropColumn('applications');
        });
    }
};
