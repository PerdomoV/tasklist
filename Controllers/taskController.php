<?php

require_once 'helpers/validation.php';
require_once 'Models/taskModel.php';
require_once 'kernel/baseController.php';


class taskController extends baseController{

    public function __construct(){
        parent::__construct();

    }

    public function index(){
        $task= new Task("tasklist");
        $allTasks=$task->getAll();
        $this->view("index",$allTasks);
    }

    public function create($data=[]){

        if(!empty($_GET['id'])){
            $id=$_GET['id'];
            $task= new Task("tasklist");
            $tareaInfo=$task->getById($id);
            $data['post']=json_decode(json_encode($tareaInfo),true);
            $data['edit']=true;
            $data['id']=$id;
        }
        $this->view("new_task", $data);
    }

    public function store(){

        $task= new Task("tasklist");

        $name=!empty($_POST['name'])? $task->getdb()->escape_string($_POST['name']):false;
        $description=!empty($_POST['description'])? $task->getdb()->escape_string($_POST['description']):false;
        $fecha=!empty($_POST['fecha'])? $task->getdb()->escape_string($_POST['fecha']):false;

        $result_validation=validation($name,$description,$fecha);

        $data=[];
        $data['post']=$_POST;


        if(!is_array($result_validation)):
            $task->setName($name);
            $task->setDescription($description);
            $task->setFecha($fecha);

            $saved=$task->save();
            if($saved){
                $data['exito']="Nueva tarea creada";
                $this->redirect("task",'index',$data);
                }else{
                    if(!empty($task->getdb()->error)){
                        $data['db']="Error al guardar";
                    }
                    $this->create($data);
                }
        else:
            $data['result_validation']=$result_validation;

            $this->create($data);
        endif;
    }

    public function update(){


        $task= new Task("tasklist");

        $name=!empty($_POST['name'])? $task->getdb()->escape_string($_POST['name']):false;
        $description=!empty($_POST['description'])? $task->getdb()->escape_string($_POST['description']):false;
        $fecha=!empty($_POST['fecha'])? $task->getdb()->escape_string($_POST['fecha']):false;

        $result_validation=validation($name,$description,$fecha);

        $data=[];
        $data['post']=$_POST;

        if(!is_array($result_validation)):
            $task->setName($name);
            $task->setDescription($description);
            $task->setFecha($fecha);
            $edited=$task->edit($data['post']['id']);
            if($edited){
                $data['exito']="Tarea editada";
                $this->redirect("task",'index',$data);
                }else{
                if(!empty($task->getdb()->error)){
                    $data['db']="Error al guardar";
                }
                $this->create($data);
            }
        else:
            $data['result_validation']=$result_validation;
            $data['edit']=true;

            $this->create($data);
        endif;
}

    public function delete(){
        if(!empty($_GET['id'])){
            $id=$_GET['id'];
            $task= new Task("tasklist");
            $deleted=$task->deleteById($id);
            if($deleted){
                $_GET['exito']="Tarea eliminada";
                $this->index();
            }
        }
    }


}
