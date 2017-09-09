<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembresTribunalTable extends Migration {

	public function up()
	{
		Schema::create('membres_tribunal', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom', 200)->unique();
			$table->integer('tel')->unique();
			$table->string('grade', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('membres_tribunal');
	}
}