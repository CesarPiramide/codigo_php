<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

if(!isset($_SESSION['platos'])){
    $_SESSION['platos'] = array();
}

$_SESSION['platos'][] = array(
    'nombre' => $_POST['Nombre'],
    'ingredientes' => $_POST['Ingrediente'],
    'tipo' => $_POST['Tipo'],
    'precio' => $_POST['Precio']
);

header('Location: Verdatos.php');
?>

    <br>
    <a href="Verdatos.php">Ver platos guardados</a>

</body>
</html>
  