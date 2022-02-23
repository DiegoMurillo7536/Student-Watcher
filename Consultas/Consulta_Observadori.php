<?php
$conexion=mysqli_connect("localhost","root","","base_colegio"); ?>

<table align="center">
       <tr>
           <th>Primer Apellido</th> 
           <th>Primer Nombre</th>    
           <th>Periodo</th>
           <th>Inasistencias </th>
           <th>Asignaturas Perdidas</th>
           <th>Valor Compromiso</th>
           <th> Compromiso</th>
           <th>Curso</th>
           <th>Número de Anotación</th>  
       </tr> 
<?php 
$Estudiante=$_POST['Documento'];
$consulta="SELECT e.Primer_Nombre,e.Primer_Apellido,o.Periodo,o.Inasistencias,o.Asigaturas_Perdidas,o.Valor_Compromiso,o.Compromisos,e.Id_Curso,o.Num_Anotacion
from Observaciones as o inner join Datos_Basicos_Estudiante as e on o.Id_Estudiante=e.Identificacion order by Num_Anotacion DESC";
$resultado=mysqli_query($conexion,$consulta);

while($registro=mysqli_fetch_array($resultado)){

    ?>

       <tr>
           <td><?php echo $registro['Primer_Apellido'] ?></td>
           <td><?php echo $registro['Primer_Nombre'] ?></td>
           <td><?php echo $registro['Periodo'] ?></td> 
           <td><?php echo $registro['Inasistencias'] ?></td> 
           <td><?php echo $registro['Asigaturas_Perdidas'] ?></td> 
           <td><?php echo $registro['Valor_Compromiso'] ?></td> 
           <td><?php echo $registro['Compromisos'] ?></td>
           <td><?php echo $registro['Id_Curso'] ?></td>
           <td><?php echo $registro['Num_Anotacion'] ?></td> 
       </tr>
       <?php
}
?> <br>