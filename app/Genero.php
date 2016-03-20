<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = 'generos';

	public function  peliculas()
    {
        return $this->hasMany('App\Pelicula');
    }


}
