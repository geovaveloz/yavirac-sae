<?php   require_once './../../../libs/saewsclient/known/functions.php';   $periodolectivo =  $_REQUEST["periodolectivo"];   if($periodolectivo==""){      $respuesta = json_decode(readPeriodoLectivoAll());      $array = [];      foreach($respuesta->results as $fila){         array_push($array,$fila);      }      echo json_encode($array);   }else{      $respuesta = json_decode(readPeriodoLectivo($periodolectivo));      $array = [];      foreach($respuesta->results as $fila){         array_push($array,$fila);      }      echo json_encode($array);   }?>
