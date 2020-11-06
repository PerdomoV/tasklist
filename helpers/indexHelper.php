<?php

function loadController($controller=DEFAULT_CONTROLLER){

    $strController="Controllers/".$controller."Controller.php";
    
    $controller = $controller."Controller";
    if(!is_file($strController)){
        $strController = "Controllers/".DEFAULT_CONTROLLER."Controller.php";
    }

    require_once $strController;

    $controllerObj= new $controller();
    return $controllerObj;
}

function loadAction($controllerObj,$action){
    $controllerObj->$action();
}


function launchAction($controllerObj,$action){
    if(isset($controllerObj) && method_exists($controllerObj,$action)){
        loadAction($controllerObj,$action);
    }else{
        loadAction($controllerObj,DEFAULT_ACTION);
    }
}

