<?php

include "platos.php";

$plato = $_GET['nombre'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de ingredientes</title>
</head>
<body>
    <h1> <?php echo $plato['nombre'] ?></h1>
</body>
</html>