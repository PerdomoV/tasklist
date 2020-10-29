<table class="content-table">
<thead>
<th>Título</th>
<th>Descripción</th>
<th>Fecha límite</th>
<th>Acciones</th>
</thead>
<?php foreach($datos as $dato): ?>
    <tr>
    <td><?=$dato->name;?></td>  
    <td><?=$dato->description;?></td>
    <td><?=$dato->fecha;?></td>
    <td><a class="delete-button" href='#'>X</a>&nbsp;<a href="#" class='update-button'>Actualizar<a/></td>  
    
    </tr>
    <?php endforeach; ?>
    <!-- <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
    <td><a href='#'>Eliminar</a></td>  
    </tr> -->
</table>
    