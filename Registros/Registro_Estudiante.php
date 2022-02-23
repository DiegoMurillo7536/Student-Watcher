<?php

$conexion= mysqli_connect("localhost","root","","base_colegio");

/*datos básicos del estudiante*/
$Id_Estudiante=$_POST['Identificacion'];
$Nom1_Estudiante=$_POST['Nom1'];
$Nom2_Estudiante=$_POST['Nom2'];
$Ape1_Estudiante=$_POST['Ape1'];
$Ape2_Estudiante=$_POST['Ape2'];
$RH=$_POST['RH'];
$Fecha_Nacimiento=$_POST['Nacimiento'];
$Foto=$_POST['foto'];

/* Datos complementarios */
$Ubicacion=$_POST['Ubicacion'];
$Exp_Doc=$_POST['Exp_Doc'];
$Ciudad_Nacimiento=$_POST['Ciudad_Nacimiento'];
$EPS=$_POST['EPS'];
$Ruta=$_POST['Ruta'];
$Barrio=$_POST['Barrio'];
$Estrato=$_POST['Estrato'];
$Localidad=$_POST['Localidad'];
$Telefono=$_POST['Telefono'];

/*Datos del curso y del grado*/
$Curso=$_POST['Curso'];

/*INSERT INTO `datos_basicos_estudiante`(`Identificacion`, `Ape1`, `Ape2`, `Nom1`, `Nom2`, `RH`, `Fecha_Nac`, `Id_Curso`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')*/

$datos_basicos="INSERT INTO `datos_basicos_estudiante`(`Identificacion`, `Ape1`, `Ape2`, `Nom1`, `Nom2`, `RH`, `Fecha_Nac`,`foto`,Id_Curso) 
VALUES ('$Id_Estudiante','$Ape1_Estudiante','$Ape2_Estudiante','$Nom1_Estudiante','$Nom2_Estudiante','$RH','$Fecha_Nacimiento','$Foto','$Curso')";



$datos_complemtarios="INSERT INTO `datos_complementarios_estudiante`(`Id_Estudiante`, `Ubicacion`, `Fecha_Exp_Doc`, `Ciudad_Nac`, `Ruta`, `EPS`, `Barrio`, `Telefono`, `Estrato`, `Localidad`) VALUES
 ('$Id_Estudiante','$Ubicacion','$Exp_Doc','$Ciudad_Nacimiento','$Ruta','$EPS','$Barrio','$Telefono','$Estrato','$Localidad')";

$resultado= mysqli_query($conexion ,$datos_basicos);
$resultado2=mysqli_query($conexion , $datos_complemtarios);


if ($resultado && $resultado2) {
    header("location:http://localhost/dashboard/Archivos/Proyecto/Pagina_Principal/Observador.html");
} else{
 echo mysqli_error($resultado);
}








?>