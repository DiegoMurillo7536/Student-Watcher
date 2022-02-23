<?php
$conexion=mysqli_connect("localhost","root","","base_colegio");
$Docente=$_POST['Documento'];
$consulta="SELECT * from docentes where Codigo_Docente=$Docente";
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
           <th>Asignatura</th>
           <th>Área</th>
       </tr>
       <tr>
           <td><?php echo $registro['Codigo_Docente'] ?></td>
           <td><?php echo $registro['Ape1'] ?></td> 
           <td><?php echo $registro['Ape2'] ?></td> 
           <td><?php echo $registro['Nom1'] ?></td> 
           <td><?php echo $registro['Nom2'] ?></td> 
           <td><?php echo $registro['Asignatura'] ?></td>
           <td><?php echo $registro['Area'] ?></td>

       </tr>
       <?php
}
?>