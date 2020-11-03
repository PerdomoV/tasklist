<?php

require_once 'kernel/baseModel.php';

class Task extends baseModel{
	
	private $id, $name, $description, $fecha;
	
	public function __construct($table){
		
		parent::__construct($table);
	}

	
	public function getId(){
		
		return $this->id;
	}


	public function getName(){

		return $this->name;

	}


	public function getDescription(){
		
		return $this->description;

	}


	public function getFecha(){

		return $this->fecha;

	}


	public function setName($name){

		$this->name=$name;

	}
	
	public function setDescription($description){

		$this->description=$description;

	}
	   
	
	public function setFecha($fecha){

		$this->fecha=$fecha;

	}


	public function save(){
		$query="INSERT INTO tasklist(id, name, description, fecha)"
		."VALUES(null,'$this->name', '$this->description', '$this->fecha');";
	
		$save=$this->getdb()->query($query);
		return $save;		
	}
	
	public function edit($id){
		$query="UPDATE tasklist 	SET name = '{$this->name}', description = '{$this->description}', fecha='{$this->fecha}' WHERE id=$id";
		$edited=$this->getdb()->query($query);
		return $edited;
	}

}
				
	