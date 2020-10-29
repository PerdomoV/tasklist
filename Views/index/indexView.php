<?php


    // var_dump($datos);
    // die();


// if(!empty($_POST['errores'])){
//     echo "<h3>".$_POST['exito'].  "</h3>";
//     var_dump($_POST['errores']);
// die();
// }



require_once 'views/layout/header.php';
require_once 'views/layout/table.php';
require_once 'views/layout/footer.php';

require_once 'Controllers/taskController.php';

// if(!empty($_POST['create'])){
//     $controller= new taskController();
//     $controller->create();
// }







?>

<!-- <!DOCTYPE html>

<html>

<head>
    <title>Task List</title>
    <meta charset='utf-8' />
    <link rel='stylesheet' href='assets/style.css'>

</head>

<body>
    <div id='container'>
        <header id='header'>
            <h1> Lista de tareas</h1>
            <a href="new.php" class='btn-new-task'><button>Nueva Tarea</button></a>
        </header>

        <table class="content-table">
            <thead>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha límite</th>
                <th>Acciones</th>
            </thead>
            <tr>
                <td>Jill</td>  
                <td>Smith</td>
                <td>50</td>
                <td><a class="delete-button" href='#'>X</a>&nbsp;<a href="#" class='update-button'>Actualizar<a/></td>  

            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
                <td><a href='#'>Eliminar</a></td>  
            </tr>
        </table>


        <footer>
            <p>Desarrollado por Jorge Perdomo &copy;<?= date('Y') ?> </p>
        </footer>
    </div>
</body>
</div>

</html> -->

