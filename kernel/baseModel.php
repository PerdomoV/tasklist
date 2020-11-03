<?php

class baseModel{
	private $table, $db, $connect;

	public function __construct($table){

		$this->table=(string) $table;
		require_once 'config/database/db.php';
		$this->connect = new Database();
		$this->db=$this->connect->connection();
	}
	public function getConnect(){

		return $this->connect;

	}

	public function getdb(){

		return $this->db;

	}

	public function getAll(){
		$query=$this->db->query("SELECT * FROM $this->table ORDER BY id DESC;");
		while($row = $query->fetch_object()){
			$resultSet[]=$row;
		}
		return $resultSet;
	}


	public function getById($id){
		$query=$this->getdb()->query("SELECT * FROM $this->table WHERE id=$id;");
		if($row = $query->fetch_object()){
			$resultSet  = $row;
			return $resultSet;
		}



	}

	public function getBy($column,$value){
		$query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value';");
		while($row=$query->fetch_object()){
			$resultSet[]=$row;
		}

		return $resultSet;

	}

	public function deleteById($id){
		$result=$this->getdb()->query("DELETE  FROM $this->table WHERE id = $id;");
		return $result;
	}

	public function deleteBy($column,$value){
		$query = $this->db->query("DELETE FROM $this->table WHERE $column='$value';");
		return $query;

	}

    public function ejecutarSql($query){
		$query = $this->db->query($query);

		if($query){
			if($query->num_rows >1){
				while ($row=$query->fetch_object()){
					$resultSet[]=$row;
				}
			}elseif   ($query->num_rows==1){
				if($row=$query->fetch_object()){
					$resultSet= $row;
				}
			}else{
				$resultSet=false;
			}
		}else{
			$resultSet=false;

		}
		return $resultSet;
	}


}
