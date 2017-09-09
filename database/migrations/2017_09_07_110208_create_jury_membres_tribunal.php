<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuryMembresTribunal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jury_membres_tribunal', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('jury_id')->unsigned();
            $table->integer('membres_tribunal_id')->unsigned();
            $table->foreign('jury_id')->references('id')->on('jury')
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
        Schema::table('jury_membres_tribunal', function(Blueprint $table) {
            $table->dropForeign('jury_membres_tribunal_jury_id_foreign');
            $table->dropForeign('jury_membres_tribunal_membres_tribunal_id_foreign');
        });

        Schema::drop('jury_membres_tribunal');
        //
    }
}
