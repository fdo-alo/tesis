<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;

class GenerosController extends Controller {



    /**
     * esta funcion recupera puntos
     * @param Request $request
     */
    public function postIndex(Request $request){

        $generos = $request->all();
        $cadena = $generos['cadena'];

        /* Hasta aquí funcionaba
        $cines = DB::select("select * from (select id, titulo, clasificacion from peliculas where id in (	select pelicula_id from genero_pelicula where genero_id in (select id_genero2 from similitudes where  $cadena  order by similitud desc  limit 10))Limit 10)as v");
*/

        $cines = DB::select("select titulo, clasificacion, genero, similitud from 	peliculas, generos, genero_pelicula, similitudes  where	genero_pelicula.pelicula_id = peliculas.id and 	genero_pelicula.genero_id = generos.id and ($cadena) and id_genero2 = generos.id order by similitud desc limit 10");

        return response()->json($cines,200);


    }



}
