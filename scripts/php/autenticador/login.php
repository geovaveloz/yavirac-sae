<?php 
    require_once './../../../libs/autenticadorclient/known/functions.php';
    require_once './../../../libs/autenticadorclient/const/defaults.php';   
    $nickname =  $_REQUEST["nickname"];
    $password =  $_REQUEST["password"];
    $respuesta = json_decode(login($nickname,$password));
    $idRol = 0;
    $usuario = "";
    $idUsuario = "";
    $fila = $respuesta->results[0];
    $usuario = $fila->usuario;
    $idRol =  $fila->idRol;
    $idUsuario =  $fila->idUsuario;
    if (!($usuario == "") && !($idRol == 0)){
        switch ($idRol) {
            case 0:
                session_start();
                $_SESSION['usuario']=$usuario;
                $_SESSION['idRol']=$idRol;
                $_SESSION['idUsuario']=$idUsuario;
                echo "usuario con rol 0";
                break;
            case 1:
                session_start();
                $_SESSION['usuario']=$usuario;
                $_SESSION['idRol']=$idRol;
                $_SESSION['idUsuario']=$idUsuario;
                echo "usuario con rol 1";
                break;
            case 2:
                session_start();
                $_SESSION['usuario']=$usuario;
                $_SESSION['idRol']=$idRol;
                $_SESSION['idUsuario']=$idUsuario;
                echo "usuario con rol 2";
                break;
        }
    }else{
        session_start();
        unset( $_SESSION['usuario']);
        unset( $_SESSION['idRol']);
        unset( $_SESSION['idUsuario']);
        header("location: http://".HOST."/sae/index.html");
    }
?>
