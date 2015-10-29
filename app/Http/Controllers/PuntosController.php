<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Psy\Util\Json;

class PuntosController extends Controller {

    /**
     * esta funcion recupera puntos
     * @param Request $request
     */
    public function postIndex(Request $request){
        if($request->ajax())
        {
            $puntos = $request->all();
            $lat = $puntos[0];
            $lon = $puntos[1];
            $cines = DB::select("select name, ST_ASTEXT(way) from planet_osm_point where ST_DWithin(way, ST_GeographyFromText('SRID=4326;POINT($lon $lat)'), 3000) and name like '%Cine%'");
            return response()->json($cines,200);
        }
    }
}
