<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model {

    protected $table = 'peliculas';

    public function  generos()
    {
        return $this->hasMany('App\Genero');
    }

}
