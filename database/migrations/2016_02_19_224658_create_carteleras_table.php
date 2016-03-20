<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartelerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carteleras', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('pelicula_id')->unsigned();
            $table->foreign('pelicula_id')->references('id')->on('peliculas');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carteleras');
	}

}
