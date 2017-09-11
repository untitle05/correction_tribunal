<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDossiersCorrectionnelsTable extends Migration {

	public function up()
	{
		Schema::create('dossiers_correctionnels', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('numero_ordre')->unique()->unsigned();
			$table->datetime('date_premiere_audience');
			$table->string('partie_civile', 150)->unique();
			$table->string('prevenu', 150)->unique();
			$table->string('situation_penale', 150)->unique();
			$table->string('jugment_ADD', 150)->unique();
			$table->string('jugement_au_fond', 150)->unique();
			$table->integer('jury_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('dossiers_correctionnels');
	}
}