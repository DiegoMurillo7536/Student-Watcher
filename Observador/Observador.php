<?php
$conexion=mysqli_connect("localhost","root","","base_colegio");
$Estudiante=$_POST['Estudiante'];
$Docente=$_POST['Docente'];
$Periodo=$_POST['Periodo'];
$Inasistencias=$_POST['Inasistencias'];
$Perdidas=$_POST['Perdidas'];
$Compromiso=$_POST['Compromiso'];
$VCompromiso=$_POST['VCompromiso'];
$consulta="INSERT INTO `observaciones`(`Id_Estudiante`, `Codigo_Docente`, `Periodo`, `Inasistencias`, `Valor_Compromiso`, `Asigaturas_Perdidas`, `Compromisos`)
 VALUES ('$Estudiante','$Docente','$Periodo','$Inasistencias','$VCompromiso','$Perdidas','$Compromiso') ORDER BY Num_Anotacion DESC";
$resultado=mysqli_query($conexion,$consulta);
if ($resultado) {
    ?>
    <h1>Registro realizado correctamente</h1> 
    <?php
    header("location:http://localhost/dashboard/programitas/Proyecto/Observador/Historial/Muestra.php");

}else{
    ?>
    <h2>Lo sentimos,no se pudo realizar el registro</h2>
    <?php
    echo "no lo hicmos";
}


?>