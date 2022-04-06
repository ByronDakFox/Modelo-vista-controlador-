<?php
include_once 'Controller/controlllerDatos.php';
include_once 'Model/conexion.php';
$controller= new controlador();

if (!isset($_REQUEST['c'])){
    $controller->index();
}else{
    $action = $_REQUEST['c'];
    call_user_func(array($controller,$action));
}