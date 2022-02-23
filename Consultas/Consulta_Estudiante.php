<?php
$conexion=mysqli_connect("localhost","root","","base_colegio");
$Estudiante=$_POST['Documento'];
$consulta="SELECT * from datos_basicos_estudiante where Identificacion=$Estudiante";
$resultado=mysqli_query($conexion,$consulta);

while($registro=mysqli_fetch_array($resultado)){

    ?>
<table align="center">
       <tr>
           <th>Identificacion</th> 
           <th>Primer apellido</th>
           <th>Segundo apellido</th>
           <th>Primer nombre</th>
           <th>Segundo nombre</th>
           <th>Curso</th>
       </tr>
       <tr>
           <td><?php echo $registro['Identificacion'] ?></td>
           <td><?php echo $registro['Primer_Apellido'] ?></td> 
           <td><?php echo $registro['Segundo_Apellido'] ?></td> 
           <td><?php echo $registro['Primer_Nombre'] ?></td> 
           <td><?php echo $registro['Segundo_Nombre'] ?></td> 
           <td><?php echo $registro['Id_Curso'] ?></td>
       </tr>
       <?php
}
?>