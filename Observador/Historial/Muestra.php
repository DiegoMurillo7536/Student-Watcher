<?php
$conexion=mysqli_connect("localhost","root","","base_colegio");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="Historial.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Observaciones</title>
</head>
<body>
    <h1><a href="../../Pagina_Principal/Observador.html">Observaciones</a></h1> <br> 
    
 <table align="center">
       <tr>
           <th>Numero de Anotacion</th> 
           <th>Primer apellido(Anotado)</th>
           <th>Primer nombre(Anotado)</th>
           <th>Primer apellido(Anotador)</th>
           <th>Primer nombre(Anotador)</th>
           <th>Periodo</th>
           <th>Inasistencias</th>
           <th>Asignaturas perdidas</th>
           <th>Valor del compromiso</th>
           <th>Compromiso</th>
           <th>Curso</th>
       </tr>
       <?php
            $consulta="SELECT o.Num_Anotacion,e.Primer_Apellido,e.Primer_Nombre,o.Periodo,o.Inasistencias,o.Valor_Compromiso,o.Asigaturas_Perdidas,o.Compromisos,d.Ape1,d.Nom1,e.Id_Curso
            from Datos_Basicos_Estudiante as e inner join Observaciones as o on e.Identificacion=o.Id_Estudiante 
            inner join Docentes as d on d.Codigo_Docente=o.Codigo_Docente order by Num_Anotacion DESC;";
           
           $resultado=mysqli_query($conexion,$consulta);
            while ($muestra=mysqli_fetch_array($resultado)) {

       ?>
       <tr>
           <td><?php echo $muestra['Num_Anotacion'] ?></td>
           <td><?php echo $muestra['Primer_Apellido'] ?></td> 
           <td><?php echo $muestra['Primer_Nombre'] ?></td> 
           <td><?php echo $muestra['Ape1'] ?></td> 
           <td><?php echo $muestra['Nom1'] ?></td> 
           <td><?php echo $muestra['Periodo'] ?></td>
           <td><?php echo $muestra['Inasistencias'] ?></td>
           <td><?php echo $muestra['Asigaturas_Perdidas'] ?></td>
           <td><?php echo $muestra['Valor_Compromiso'] ?></td>
           <td><?php echo $muestra['Compromisos'] ?></td>
           <td><?php echo $muestra['Id_Curso'] ?></td>
       </tr>
       <?php
    }?>
   </table>
   </body>
   </html>
   