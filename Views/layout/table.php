<table class="content-table">
<thead>
<th>Título</th>
<th>Descripción</th>
<th>Fecha límite</th>
<th>Acciones</th>
</thead>
    
<?php if(!empty($datos)): ?>
    <?php foreach($datos as $dato): ?>
        <tr>
        <td><?=$dato->name;?></td>  
        <td><?=$dato->description;?></td>
        <td><?=$dato->fecha;?></td>
        <td><a class="delete-button" href='index.php?controller=task&action=delete&id=<?=$dato->id;?>'>X</a>&nbsp;<a href="index.php?controller=task&action=create&id=<?=$dato->id;?>" class='update-button'>Actualizar<a/></td>  
        
        </tr>
        <?php endforeach; ?>
    
    <?php else: ?>
        <!-- <p>No hay tareas pendientes </p> -->
    <?php endif; ?>
    <!-- <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
    <td><a href='#'>Eliminar</a></td>  
    </tr> -->
</table>
    