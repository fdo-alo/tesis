<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerosPeliculas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genero_pelicula', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('genero_id')->unsigned();
            $table->integer('pelicula_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('genero_pelicula');
	}

}
