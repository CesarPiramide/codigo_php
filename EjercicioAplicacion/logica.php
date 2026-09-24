<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola, <?php echo $_POST['Nombre'];?> <br>
    Tu tiempo es: <?php echo $_POST['Tiempo']; ?> <br>
</body>
</html>


<?php
    if(empty($_POST['Nombre'])){
        echo "El Nombre es obligatorio";
    } else{
        $mostrarnombre = ($_GET['Nombre']);
    }

    if(empty($_POST['Tiempo'])){
        echo "No has introducido el tiempo";
    } else{
        $mostrarTiempo ($_GET['Tiempo']);
    }

?>