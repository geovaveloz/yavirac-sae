<?php
require_once './../../../libs/saewsclient/lib/nusoap.php';
require_once './../../../libs/autenticadorclient/const/defaults.php';

//CRUD ROLES
function createRol($descripcion,$acceso){
    $client = new nusoap_client(WSDL);
    $result=$client->call('createRol',array("descripcion"=>$descripcion,"acceso"=>$acceso));
    return $result;
}

function readRol($id){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readRol',array("id"=>$id));
    return $result;
}

function readRoles(){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readRoles',array());
    return $result;
}

function updateRol($id,$descripcion,$acceso){
    $client = new nusoap_client(WSDL);
    $result=$client->call('updateRol',array("id"=>$id,"descripcion"=>$descripcion,"acceso"=>$acceso));
    return $result;
}

function deleteRol($id){
    $client = new nusoap_client(WSDL);
    $result=$client->call('deleteRol',array("id"=>$id));
    return $result;
}

//CRUD - CUENTAS

function createCuenta($nickname,$idUsuario,$idRol,$clave){
    $client = new nusoap_client(WSDL);
    $result=$client->call('createCuenta',array("nickname"=>$nickname,"idUsuario"=>$idUsuario,"idRol"=>$idRol,"clave"=>$clave));
    return $result;
}

function createCuentaCedula($nickname,$cedula,$idRol,$clave){
    $client = new nusoap_client(WSDL);
    $result=$client->call('createCuenta',array("nickname"=>$nickname,"cedula"=>$cedula,"idRol"=>$idRol,"clave"=>$clave));
    return $result;
}

function readCuenta($id){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readCuenta',array("id"=>$id));
    return $result;
}

function readCuentas(){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readCuentas',array());
    return $result;
}

function updateCuenta($id,$nickname,$idUsuario,$idRol,$clave){
    $client = new nusoap_client(WSDL);
    $result=$client->call('updateCuenta',array("id"=>$id,"nickname"=>$nickname,"idUsuario"=>$idUsuario,"idRol"=>$idRol,"clave"=>$clave));
    return $result;
}

function deleteCuenta($id){
    $client = new nusoap_client(WSDL);
    $result=$client->call('deleteCuenta',array("id"=>$id));
    return $result;
}

//CRUD - USUARIOS

function createUsuario($nombres,$apellidos,$telefono,$correo,$cedula){
    $client = new nusoap_client(WSDL);
    $result=$client->call('createUsuario',array("nombres"=>$nombres,"apellidos"=>$apellidos,"telefono"=>$telefono,"correo"=>$correo,"cedula"=>$cedula));
    return $result;
}

function readUsuario($id){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readUsuario',array("id"=>$id));
    return $result;
}

function readUsuarios(){
    $client = new nusoap_client(WSDL);
    $result=$client->call('readUsuarios',array());
    return $result;
}

function updateUsuario($id,$nombres,$apellidos,$telefono,$correo,$cedula){
    $client = new nusoap_client(WSDL);
    $result=$client->call('updateUsuario',array("id"=>$id,"nombres"=>$nombres,"apellidos"=>$apellidos,"telefono"=>$telefono,"correo"=>$correo,"cedula"=>$cedula));
    return $result;
}

function deleteUsuario($id){
    $client = new nusoap_client(WSDL);
    $result=$client->call('deleteUsuario',array("id"=>$id));
    return $result;
}

// FUNCONES PROPIAS DEL LOGIN

function login($username,$password){
    $client = new nusoap_client(WSDL);
    $result=$client->call('login',array("username"=>$username,"password"=>$password));
    return $result;
}

function changePassword($username,$oldpassword,$newpassword){
    $client = new nusoap_client(WSDL);
    $result=$client->call('changePassword',array("username"=>$username,"oldpassword"=>$oldpassword,"newpassword"=>$newpassword));
    return $result;
}
?>