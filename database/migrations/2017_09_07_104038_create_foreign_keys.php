<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('dossiers_correctionnels', function(Blueprint $table) {
			$table->foreign('jury_id')->references('id')->on('jury')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('renvoi', function(Blueprint $table) {
			$table->foreign('dossier_id')->references('id')->on('dossiers_correctionnels')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('dossiers_correctionnels', function(Blueprint $table) {
			$table->dropForeign('dossiers_correctionnels_jury_id_foreign');
		});
		Schema::table('renvoi', function(Blueprint $table) {
			$table->dropForeign('renvoi_dossier_id_foreign');
		});
	}
}