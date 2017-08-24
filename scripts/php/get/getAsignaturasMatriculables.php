<?php
   require_once './../../../libs/saewsclient/known/functions.php';
   $carrera =  $_REQUEST["carrera"];
   $nivel =  $_REQUEST["nivel"];
   if($nivel>1){
      echo "Sitio en construccion";
   }else{
      $respuesta = json_decode(readAsignaturasPrimerNivel($carrera));
      $array = [];
      foreach($respuesta->results as $fila){
         array_push($array,$fila);
      }
      echo json_encode($array);
   }
?>
