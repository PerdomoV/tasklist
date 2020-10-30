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
    <input name='name'><br>
    <label for='description'>Descripción:</label> <?php if(!empty($datos['description'])){echo "<p>".$datos['description']."</p>"; } ?> <br>
    <textarea name='description'></textarea> <br>
    <label for='fecha'>Fecha:</label> <?php if(!empty($datos['fecha'])){echo "<p>".$datos['fecha']."</p>"; } ?>  <br>
    <input name='fecha' type='text'> <br>
    <input  class='send-button' type='submit'name='create' >
    </form>
  

    </body>

</html>