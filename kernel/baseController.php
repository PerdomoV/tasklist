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


	public function redirect($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION, $data){

		$str="";

		if(is_array($data)){
			foreach($data as $key=>$value){
				$str=$str."&".$key."=".$value;
			}
			header("Location:index.php?controller=".$controller."&action=".$action."".$str);
		}else{
			
			$str="&".$data."=".$data;
			header("Location:index.php?controller=".$controller."&action=".$action."".$str);
		}

	}

	}

