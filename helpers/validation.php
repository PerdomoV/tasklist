<?php

function validation($name, $description, $fecha){

    $errors=[];
    /*primero el nnombre*/
    if(!(strlen($name)<=40) or !preg_match('/[a-zA-Z0-9]/', $name) or empty($name)){
        $errors['name']='Nombre incorrecto';
    }

    if(!(strlen($description)<=100 && 0<=strlen($name)) and !preg_match('/[a-zA-Z0-9\s]/', $description)){
        $errors['description']='Descripcicón incorrecta';
    }

    if(!preg_match('/(\d\d\d\d\-\d\d\-\d\d){1}/', $fecha) or empty($fecha) or DateTime::createFromFormat ("YYYY-MM-DD" , $fecha)==false){
        $errors['fecha']='Fecha incorrecta';
    }

    if(empty($errors)){
        return true;
    }else{
        //$_SESSION['errors']=$errors;
        //var_dump($_SESSION['errors']);die();
        return $errors;
    }
}