<?php

$servidor = "Bdwec";
$port = 3306;
$usuario = "admin";
$password = "Cesarjover11"; 
$base_datos = "Bdwec"; 

$dsn = "mysql:host=$servidor;port=$port;dbname=$base_datos;charset=utf8mb4";
$opciones_ssl = [

PDO::MYSQL_ATTR_SSL_CA => '/etc/ssl/certs/ca-certificates.crt',

PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
];

$conector = null;

?>