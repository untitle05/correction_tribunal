<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRenvoiTable extends Migration {

	public function up()
	{
		Schema::create('renvoi', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('motif_renvoi', 150)->unique()->nullable();
			$table->datetime('date_renvoi')->unique()->nullable();
			$table->integer('dossier_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('renvoi');
	}
}