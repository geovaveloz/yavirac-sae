<?php 
    require_once './../../../libs/autenticadorclient/known/functions.php';
    require_once './../../../libs/autenticadorclient/const/defaults.php';   
    $nombres =  $_REQUEST["nombres"];
    $apellidos =  $_REQUEST["apellidos"];
    $telefono =  $_REQUEST["telefono"];
    $correo =  $_REQUEST["correo"];
    $cedula =  $_REQUEST["cedula"];
    $nickname =  $_REQUEST["nickname"];
    $password =  $_REQUEST["password"];
    echo createUsuario($nombres,$apellidos,$telefono,$correo,$cedula);
    echo createCuenta($nickname,$cedula,2,$password);
    header("location: http://".HOST."/sae/index.html");
?>