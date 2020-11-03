<?php 
?>

<html>
    <head>

    </head>
    <body>  
    <?php if( isset($datos['edit']) && $datos['edit']==true): ?>
        <form action='index.php?controller=task&action=update' method='post'>
        <label for='id'> ID:  </label>  
        <input type='text' value='<?=$datos['id']?>' name='id' readonly>
    <?php else: ?>
        <form action='index.php?controller=task&action=store' method='post'>
        
    <?php endif; ?>
    <?php 
            if(!empty($datos['db'])){    
                echo '<p>'.$datos['db'].'</p>';
            }
    ?> 
    
    <label for='name'>Título:</label> <?php if(!empty($datos['result_validation']['name'])){echo "<p>".$datos['result_validation']['name']."</p>"; } ?> <br>
    <input value='<?php if(!empty($datos['post']['name'])){ echo $datos['post']['name'];}?>' name='name' ><br>
    <label for='description'>Descripción:</label> <?php if(!empty($datos['result_validation']['description'])){echo "<p>".$datos['result_validation']['description']."</p>"; } ?> <br>
    <textarea name='description'><?php if(!empty($datos['post']['description'])){echo $datos['post']['description'];}?></textarea> <br>
    <label for='fecha'>Fecha:</label> <?php if(!empty($datos['result_validation']['fecha'])){echo "<p>".$datos['result_validation']['fecha']."</p>"; } ?>  <br>
    <input name='fecha' value='<?php if(!empty($datos['post']['fecha'])){echo $datos['post']['fecha'];}?>' type='text'> <br>


    <?php if( isset($datos['edit']) && $datos['edit']==true): ?>
        <input  class='send-button'  type='submit' name='update' value='Actualizar'>
        <a href='index.php'>Cancelar </a>

    <?php else: ?>
        <input  class='send-button'  type='submit' name='create' value='Crear'>
        
    <?php endif; ?>

    </form>
  
    

    </body>

</html>