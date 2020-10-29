<?php

require_once 'helpers/validation.php';
//require_once './database/db.php';
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

    public function create($errors=[]){
        
        //var_dump($errors);
        //die();
        $this->view("new_task", $errors);
    }

    public function store(){
        
        //var_dump($_POST);
        //die();
        
        $task= new Task("tasklist");
        
        $name=!empty($_POST['name'])? $task->getdb()->escape_string($_POST['name']):false;
        $description=!empty($_POST['description'])? $task->getdb()->escape_string($_POST['description']):false;
        $fecha=!empty($_POST['fecha'])? $task->getdb()->escape_string($_POST['fecha']):false;
        
        $result_validation=validation($name,$description,$fecha);
        
        //var_dump($result_validation);
        //die();
        
        if(!is_array($result_validation)):
            $task->setName($name);
            $task->setDescription($description);
            $task->setFecha($fecha);
            
            $saved=$task->save();
            //var_dump($tarea);
            //die();
            if($saved){
                //$_SESSION['exito']='Tarea creada';
                $this->redirect("task",'index');
                //var_dump($_SESSION['exito']);
                //die();
                /*header("Location: ");*/
                }else{
                //$_SESSION['errors']='Guardado fallido';
                //header('Location: ');
                //var_dump($task->getdb()->error);
                //die();    
                if(!empty($task->getdb()->error)){
                    $error['db']="Error al guardar";
                }
                $this->create($error);
            }
        else:
            //var_dump($result_validation);
            //die();
            $this->create($result_validation);
        endif;
    }





}
