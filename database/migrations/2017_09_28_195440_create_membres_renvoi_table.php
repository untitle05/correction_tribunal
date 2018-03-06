<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresRenvoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres_renvoi', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('membres_id')->unsigned();
            $table->integer('renvoi_id')->unsigned();
            $table->foreign('renvoi_id')->references('id')->on('renvoi')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('membres_id')->references('id')->on('membres_tribunal')
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
        Schema::table('membres_renvoi', function(Blueprint $table) {
            $table->dropForeign('membres_renvoi_membres_id_foreign');
            $table->dropForeign('membres_renvoi_renvoi_id_foreign');
        });

        Schema::drop('membres_renvoi');
        //
    }
}
