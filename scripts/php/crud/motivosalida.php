<?php   require_once './../../../libs/saewsclient/known/functions.php';   require_once './../../../libs/saewsclient/const/defaults.php';   $boton =  $_REQUEST["submit"];   $MotivoSalida =  $_REQUEST["MotivoSalida"];   $descripcion =  $_REQUEST["descripcion"];   if($boton == "BORRAR"){      deleteMotivoSalida($MotivoSalida);   }   if($boton == "GUARDAR" || $boton == "ACTUALIZAR"){      if($MotivoSalida>0){         updateMotivoSalida($MotivoSalida,$descripcion);      }else{         createMotivoSalida($descripcion);      }   }   header("location: http://".HOST."/sae");?>
