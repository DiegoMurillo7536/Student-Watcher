<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Observador/Historial/Historial.css">
    <title>Consulta</title>
</head>
<body>
    <a href="../Pagina_Principal/Observador.html"> <h1>Consulta de observaciones</h1></a>
    <article>
    <p>Para consultar sus observaciones en el sistema,necesita lo siguiente:
        <ul>
           <b> <li>Documento de identidad</li></b>
        </ul>
    </p>
   
    <form method="post">
        <input type="text" name="Documento" placeholder="Ingresa tu documento"> <br> <br>
        <button type="submit">Consultar</button> 
    </form><br>
    </article> <br> <br>
    <?php
    include("Consulta_Observadori.php")
    ?>
</body>
</html>