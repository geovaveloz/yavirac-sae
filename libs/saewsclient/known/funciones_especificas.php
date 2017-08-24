<?php
// FUNCIONES PROPIAS

function readAsignaturasPrimerNivel($carrera){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readAsignaturasPrimerNivel',array('carrera'=>$carrera));
    return $result;
 }

?>