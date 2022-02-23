<?php

$conexion= mysqli_connect("localhost","root","","base_colegio");

$Codigo_Docente=$_POST['Cod_Docente'];
$Ape1=$_POST['Ape1'];
$Ape2=$_POST['Ape2'];
$Nom1=$_POST['Nom1'];
$Nom2=$_POST['Nom2'];
$Fecha_Nac=$_POST['Fecha_Nac'];
$RH=$_POST['RH'];
$Asig=$_POST['Asig'];
$Area=$_POST['Area'];
$Jornada=$_POST['Jornada'];
$Email=$_POST['Email'];

$sentencia="INSERT INTO `docentes`(`Codigo_Docente`, `Ape1`, `Ape2`, `Nom1`, `Nom2`, `Fecha_Nac`, `RH`, `Asignatura`, `Area`, `Jornada`, `Email`)
 VALUES ('$Codigo_Docente','$Ape1','$Ape2','$Nom1','$Nom2','$Fecha_Nac','$RH','$Asig','$Area','$Jornada','$Email')";

$total= mysqli_query($conexion,$sentencia);

if ($total) {
    # code...
    header("location:Login.html");
} else{
    echo "no lo hicimos";
}




?>