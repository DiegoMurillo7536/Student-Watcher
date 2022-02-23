<?php
$conexion= mysqli_connect("localhost","root","","base_colegio");

$Id_Profe=$_POST['Id_Profe'];
$Num_Anot=$_POST['Num_Anot'];
$sentencia="DELETE FROM Observaciones where Codigo_Docente=$Id_Profe and Num_Anotacion=$Num_Anot";

$resultado=mysqli_query($conexion,$sentencia);
if ($resultado) {
    # code...
    header("location:http://localhost/dashboard/programitas/Proyecto/Observador.html");
} 
else{
    echo "no se pudo realizar la eliminación del registro";
}

?>