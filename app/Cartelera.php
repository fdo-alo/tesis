<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartelera extends Model {

    protected $table = 'peliculas';

	public function peliculas()
    {
        return $this->hasMany('App\Pelicula');
    }

}
