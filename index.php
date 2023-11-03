<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba docker 2</title>
</head>
<body>

    <h3>Practica Docker Compose/php/Mysql, Estudiante: Rafael Ariel Custodio Guillen <b>2021-2054</b></h3>

    <img src="shy.jpeg" alt="">
    
<?php

        $hosting = getenv('MYSQL_HOST'); 
        $usernamesql = getenv('MYSQL_USER');
        $passwordsql = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');


        // En esta parte se esta intentando realizar la conexion a la bd
        $connetao = new mysqli($hosting, $usernamesql, $passwordsql, $database);

        if ($connetao->connect_error) {
        die("Hubo un error de conexión: " . $conne->connect_error);
        }

        echo "Pon >>>>Conexion exitosa<<<< en tu echo";
?>

</body>
</html>