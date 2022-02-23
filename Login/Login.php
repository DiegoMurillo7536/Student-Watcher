<?php
$conexion=mysqli_connect("localhost","root","","base_colegio");
$Codigo=$_POST['Codigo'];
$consulta="SELECT*FROM docentes WHERE  Codigo_Docente='$Codigo'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if ($filas) {
    header("Location:http://localhost/dashboard/programitas/Proyecto/Pagina_Principal/Observador.html");
} elseif ($filas==0) {
    echo "Lo sentimos,no estás autorizado o salió algo mal,revisa si ingresaste un dato mal";
}
?>