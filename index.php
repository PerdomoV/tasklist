<?php
if(!isset($_SESSION)){
    session_start();
    //$_SESSION['hola']='hola';
    //var_dump($_SESSION);
    //die();
}

require_once 'helpers/indexHelper.php';
require_once 'config/global.php';


if(empty($_GET['controller']) || empty($_GET['action'])){
    $controller=DEFAULT_CONTROLLER;
    $action=DEFAULT_ACTION;
    //var_dump(DEFAULT_CONTROLLER);
    //die();
}else{  

    $action=$_GET['action'];
    $controller=$_GET['controller'];    

}


$controllerObj=loadController($controller);

launchAction($controllerObj, $action);


