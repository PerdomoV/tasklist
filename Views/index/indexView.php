<?php


require_once 'views/layout/header.php';

if(!empty($_GET['exito'])){
    echo "<br> <div class='card' style='
    background-color: #6c757d;  
    margin: auto;
    border: 3px #6c757d solid;
    padding: 10px;
    height: 30px; 
    width: 200px; 
    display:flex; 
    justify-content: center; 
    align-items: center;'>";
    echo "<strong class='card-title'
    style='color: white; text-transform: uppercase;'>"
    .$_GET['exito']."</strong>";

    echo "</div>";
}
require_once 'views/layout/table.php';
require_once 'views/layout/footer.php';

require_once 'Controllers/taskController.php';

?>

