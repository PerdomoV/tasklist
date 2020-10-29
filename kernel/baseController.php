<?php

class baseController{

	public function __construct(){
		require_once 'baseModel.php';
		
		foreach(glob("Models/*.php") as $file){
			require_once $file;

		}
	}

	public function view($vista,$datos){
		
		if(is_array($datos)){
			foreach($datos as $id_assoc => $valor){
				${$id_assoc}=$valor;
			}
		}
		//var_dump($datos);
		//	die();
		require_once 'Views/'.$vista."/".$vista.'View.php';
	}


	public function redirect($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION){
		header("Location:index.php?controller=".$controller."&action=".$action);
	}

	}

