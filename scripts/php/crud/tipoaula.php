<?php   require_once './../../../libs/saewsclient/known/functions.php';   require_once './../../../libs/saewsclient/const/defaults.php';   $boton =  $_REQUEST["submit"];   $TipoAula =  $_REQUEST["TipoAula"];   $descripcion =  $_REQUEST["descripcion"];   if($boton == "BORRAR"){      deleteTipoAula($TipoAula);   }   if($boton == "GUARDAR" || $boton == "ACTUALIZAR"){      if($TipoAula>0){         updateTipoAula($TipoAula,$descripcion);      }else{         createTipoAula($descripcion);      }   }   header("location: http://".HOST."/sae");?>
