<?php   require_once './../../../libs/saewsclient/known/functions.php';   require_once './../../../libs/saewsclient/const/defaults.php';   $boton =  $_REQUEST["submit"];   $Ocupacion =  $_REQUEST["Ocupacion"];   $descripcion =  $_REQUEST["descripcion"];   if($boton == "BORRAR"){      deleteOcupacion($Ocupacion);   }   if($boton == "GUARDAR" || $boton == "ACTUALIZAR"){      if($Ocupacion>0){         updateOcupacion($Ocupacion,$descripcion);      }else{         createOcupacion($descripcion);      }   }   header("location: http://".HOST."/sae");?>
