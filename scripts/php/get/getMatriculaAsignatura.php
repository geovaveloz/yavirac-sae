<?php   require_once './../../../libs/saewsclient/known/functions.php';   $matriculaasignatura =  $_REQUEST["matriculaasignatura"];   if($matriculaasignatura==""){      $respuesta = json_decode(readMatriculaAsignaturaAll());      $array = [];      foreach($respuesta->results as $fila){         array_push($array,$fila);      }      echo json_encode($array);   }else{      $respuesta = json_decode(readMatriculaAsignatura($matriculaasignatura));      $array = [];      foreach($respuesta->results as $fila){         array_push($array,$fila);      }      echo json_encode($array);   }?>
