<?php   require_once './../../../libs/saewsclient/known/functions.php';   require_once './../../../libs/saewsclient/const/defaults.php';   $boton =  $_REQUEST["submit"];   $Modalidad =  $_REQUEST["Modalidad"];   $descripcion =  $_REQUEST["descripcion"];   if($boton == "BORRAR"){      deleteModalidad($Modalidad);   }   if($boton == "GUARDAR" || $boton == "ACTUALIZAR"){      if($Modalidad>0){         updateModalidad($Modalidad,$descripcion);      }else{         createModalidad($descripcion);      }   }   header("location: http://".HOST."/sae");?>
