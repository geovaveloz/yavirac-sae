<?php   require_once './../../../libs/saewsclient/known/functions.php';   $estadosolicitud =  $_REQUEST["estadosolicitud"];   if($estadosolicitud==""){      $respuesta = json_decode(readEstadoSolicitudAll());      $array = [];      foreach($respuesta->results as $fila){         array_push($array,$fila);      }      echo json_encode($array);   }else{      $respuesta = json_decode(readEstadoSolicitud($estadosolicitud));      $array = [];      foreach($respuesta->results as $fila){         array_push($array,$fila);      }      echo json_encode($array);   }?>
