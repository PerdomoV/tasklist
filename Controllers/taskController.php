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

    public function create($data=[]){
        
        //var_dump($errors);
        //die();
        $this->view("new_task", $data);
    }

    public function store(){
        
        //var_dump($_POST);
        //die();
        
        $task= new Task("tasklist");
        
        $name=!empty($_POST['name'])? $task->getdb()->escape_string($_POST['name']):false;
        $description=!empty($_POST['description'])? $task->getdb()->escape_string($_POST['description']):false;
        $fecha=!empty($_POST['fecha'])? $task->getdb()->escape_string($_POST['fecha']):false;

        //$valFecha=DateTime::createFromFormat ("YYYY-MM-DD" , $fecha); 
        //var_dump($valFecha);
        //die();

        
        $result_validation=validation($name,$description,$fecha);
        
        //var_dump($result_validation);
        //die();
        $data=[];
        $data['post']=$_POST;


        if(!is_array($result_validation)):
            $task->setName($name);
            $task->setDescription($description);
            $task->setFecha($fecha);
            
            $saved=$task->save();
            //var_dump($tarea);
            //die();
            if($saved){
                //$_SESSION['exito']='Tarea creada';
                $data['exito']="Nueva tarea creada";
                $this->redirect("task",'index',$data);
                //var_dump($_SESSION['exito']);
                //die();
                /*header("Location: ");*/
                }else{
                //$_SESSION['errors']='Guardado fallido';
                //header('Location: ');
                //var_dump($task->getdb()->error);
                //die();    
                if(!empty($task->getdb()->error)){
                    $data['db']="Error al guardar";
                }
                //var_dump($error);
                //die();  
                $this->create($data);
            }
        else:
            $data['result_validation']=$result_validation;
            //var_dump($data);
            //die();

            $this->create($data);
        endif;
    }

    public function update(){
        
      
        $task= new Task("tasklist");
        
        $name=!empty($_POST['name'])? $task->getdb()->escape_string($_POST['name']):false;
        $description=!empty($_POST['description'])? $task->getdb()->escape_string($_POST['description']):false;
        $fecha=!empty($_POST['fecha'])? $task->getdb()->escape_string($_POST['fecha']):false;

        //$valFecha=DateTime::createFromFormat ("YYYY-MM-DD" , $fecha); 
        //var_dump($valFecha);
        //die();

        
        $result_validation=validation($name,$description,$fecha);
        
        //var_dump($result_validation);
        //die();
        $data=[];
        $data['post']=$_POST;


        if(!is_array($result_validation)):
            $task->setName($name);
            $task->setDescription($description);
            $task->setFecha($fecha);
        
        endif;
}


}