<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossiersCorrectionnelsMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers_correctionnels_membres', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('dossiers_correctionnels_id')->unsigned();
            $table->integer('membres_tribunal_id')->unsigned();
            $table->foreign('dossiers_correctionnels_id')->references('id')->on('dossiers_correctionnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('membres_tribunal_id')->references('id')->on('membres_tribunal')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dossiers_correctionnels_membres', function(Blueprint $table) {
            $table->dropForeign('dossiers_correctionnels_membres_dossiers_correctionnels_id_foreign');
            $table->dropForeign('dossiers_correctionnels_membres_membres_tribunal_id_foreign');
        });

        Schema::drop('dossiers_correctionnels_membres');
        //
    }
}
