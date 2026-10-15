<?php

$servidor = "bdwes.cnjx4wbaayua.us-east-1.rds.amazonaws.com";
$port = 3306;
$usuario = "admin";
$password = "Cesarjover11";
$base_datos = "restaurante";

$dsn = "mysql:host=$servidor;port=$port;dbname=$base_datos;charset=utf8mb4";
$opciones_ssl = [
    Pdo\Mysql::ATTR_SSL_CA => __DIR__ . '/cert/global-bundle.pem',
    Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT => false
];

$conexion = new PDO($dsn, $usuario, $password, $opciones_ssl);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>