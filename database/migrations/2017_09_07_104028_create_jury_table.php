<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuryTable extends Migration {

	public function up()
	{
		Schema::create('jury', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 150)->unique();
		});
	}

	public function down()
	{
		Schema::drop('jury');
	}
}