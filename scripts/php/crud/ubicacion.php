<?php   require_once './../../../libs/saewsclient/known/functions.php';   require_once './../../../libs/saewsclient/const/defaults.php';   $boton =  $_REQUEST["submit"];   $Ubicacion =  $_REQUEST["Ubicacion"];   $descripcion =  $_REQUEST["descripcion"];   $idPadre =  $_REQUEST["idPadre"];   if($boton == "BORRAR"){      deleteUbicacion($Ubicacion);   }   if($boton == "GUARDAR" || $boton == "ACTUALIZAR"){      if($Ubicacion>0){         updateUbicacion($Ubicacion,$descripcion,$idPadre);      }else{         createUbicacion($descripcion,$idPadre);      }   }   header("location: http://".HOST."/sae");?>
