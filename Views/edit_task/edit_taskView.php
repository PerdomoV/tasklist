<!DOCTYPE html>

<html>

<head>
<title>Task List</title>
<meta charset='utf-8' />
<link rel='stylesheet' href='assets/style.css'>

</head>

<body>




<div id='container'>
<header id='header'>
<h1> Nueva tarea</h1>

</header>


<form action='index.php?controller=task&action=edit' method='post'>
<?php 
if(!empty($datos['db'])){    
    echo '<p>'.$datos['db'].'</p>';
}
?> 

<label for='name'>Título:</label>  <br/>
<input value='<?php if(!empty($datos['name'])){echo $datos['name']; } ?>' name='name'><br>
<label for='description'>Descripción:</label>  <br>
<textarea name='description'><?php if(!empty($datos['description'])){echo $datos['description']; } ?></textarea> <br>
<label for='fecha'>Fecha:</label>   <br>
<input name='fecha' value='<?php if(!empty($datos['fecha'])){echo $datos['fecha']; } ?>' type='text'> <br>
<input  class='send-button' type='submit'name='create'          value='Actualizar'>
</form>

</body>

</html>


