<?php
//$latitud = $_POST['latitud'];
//$longitud = $_POST['longitud'];
//$radio = $_POST['radio'];
//$conn = pg_connect("localhost port=5432 dbname=tesis user=postgres password=usagi");
//$result = pg_query("select name, ST_ASTEXT(way) from planet_osm_point where ST_DWithin(way, ST_GeographyFromText('SRID=4326;POINT(-99.148028 19.502198)'), 3000) and name like '%Cine%'");
$arr = array();

// createjson array here

dd($arr);
echo json_encode($arr);