<?php


function validation($name, $description, $fecha){

    $errors=[];
    if(!(strlen($name)<=40) or !preg_match('/[a-zA-Z0-9]/', $name) or empty($name)){
        $errors['name']='Titulo incorrecto';
    }

    if(!(strlen($description)<=100 && 0<=strlen($name)) and !preg_match('/[a-zA-Z0-9\s]/', $description)){
        $errors['description']='Descripcicón incorrecta';
    }

    if(!preg_match('/(\d\d\d\d\-\d\d\-\d\d){1}/', $fecha) or empty($fecha) ){
        $errors['fecha']='Fecha incorrecta';
    }

    if(empty($errors)){
        return true;
    }else{
        return $errors;
    }
}