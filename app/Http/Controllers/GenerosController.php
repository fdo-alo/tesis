<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GenerosController extends Controller {



    /**
     * esta funcion recupera puntos
     * @param Request $request
     */
    public function postIndex(Request $request){

        $generos = $request->all();
        $cadena = $generos['cadena'];

        $cines = DB::select("select * from (select id, titulo, clasificacion from peliculas where id in (	select pelicula_id from genero_pelicula where genero_id in (select ig_genero2 from similitudes where  $cadena  order by similitud desc  limit 10))Limit 10)as v");


        return response()->json($cines,200);


    }



}
