<?php 
?>

<html>
    <head>

    </head>
    <body>

    <form action='index.php?controller=task&action=store' method='post'>
    <?php 
            if(!empty($datos['db'])){    
                echo '<p>'.$datos['db'].'</p>';
            }
    ?> 
    
    <label for='name'>Título:</label> <?php if(!empty($datos['name'])){echo "<p>".$datos['name']."</p>"; } ?> <br>
    <input name='name' value='<?php if(!empty($_SESSION['post_create']['name'])){echo $_SESSION['post_create']['name']; } ?>'><br>
    <label for='description'>Descripción:</label> <?php if(!empty($datos['description'])){echo "<p>".$datos['description']."</p>"; } ?> <br>
    <textarea name='description'><?php if(!empty($_SESSION['post_create']['description'])){echo $_SESSION['post_create']['description']; } ?></textarea> <br>
    <label for='fecha'>Fecha:</label> <?php if(!empty($datos['fecha'])){echo "<p>".$datos['fecha']."</p>"; } ?>  <br>
    <input name='fecha' type='text' value=' <?php if(!empty($_SESSION['post_create']['fecha'])){echo $_SESSION['post_create']['fecha']; } ?>'> <br>
    <input  class='send-button' type='submit' name='create' value='Crear' >
            
    <?php session_unset(); ?>

    </form>

  

    </body>

</html>