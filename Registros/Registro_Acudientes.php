<?php

$conexion=mysqli_connect("localhost","root","","base_colegio");
include("Registro_Estudiante.php");
$Identificacion_Acudiente=$_POST['Identificacion_Acudiente'];
$Noma1=$_POST['Noma1'];
$Noma2=$_POST['Noma2'];
$Apa1=$_POST['Apa1'];
$Apa2=$_POST['Apa2'];
$Parentezco=$_POST['Parentezco'];
$Celular=$_POST['Celular'];
$Email=$_POST['Email'];
$Firma=$_POST['Firma'];


$sql="INSERT INTO `acudientes`(`Id_Estudiante`, `Identificacion`, `Ape1`, `Ape2`, `Nom1`, `Nom2`, `Parentezco`, `Celular`, `Firma`, `Email`) 
VALUES ('$Id_Estudiante','$Identificacion_Acudiente','$Apa1','$Apa2','$Noma1','$Noma2','$Parentezco','$Celular','$Firma','$Email')";
$consulta=mysqli_query($conexion,$sql);

if ($consulta) {
    # code...
    header("location:http://localhost/dashboard/programitas/Proyecto/Pagina_Principal/Observador.html");
} else{
    ?>
    <script> 
    alert("Lo sentimos,no se pudo registrar")
    </script>
    <?php   
}


?>