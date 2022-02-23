<?php
$conexion=mysqli_connect("localhost","root","","base_colegio");
$Codigo_Docente=$_POST['Codigo_Docente'];
$Num_Anot=$_POST['Num_Anot'];
$Periodo=$_POST['Periodo'];
$Inasistencias=$_POST['Inasistencias'];
$Materias=$_POST['Materias'];
$Vcompromiso=$_POST['Vcompromiso'];
$Compromiso=$_POST['Compromiso']; 
$sentencia="UPDATE observaciones set Periodo='$Periodo',Inasistencias='$Inasistencias',Asigaturas_Perdidas=$Materias,Valor_Compromiso='$Vcompromiso',Compromisos='$Compromiso'
where Codigo_Docente='$Codigo_Docente' and Num_Anotacion='$Num_Anot'";
$resultado=mysqli_query($conexion,$sentencia);

if ($resultado) {
    # code...
    header("location:http://localhost/dashboard/programitas/Proyecto/Observador.html");
}else{
    ?>
    <script>
        alert("No se pudo realizar el cambio")
    </script>
    <?php
}

?>