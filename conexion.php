<?php 
    //credenciales
    $host = 'localhost';
    $dbname = 'saboresnaturalesdb';
    $username = 'root';
    $password = 'root';

    try {
        //conexion PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Error de conexion a la base de datos: " . $e->getMessage());
    }
?>