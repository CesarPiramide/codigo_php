<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Platos</title>
</head>
<body>
    <h1>Listado de Platos</h1><hr>
    
    <?php
    if(!empty($_SESSION['platos'])){
        foreach($_SESSION['platos'] as $id => $plato){
            echo "<h3>{$plato['nombre']} - {$plato['precio']}€</h3>";
            echo "<p>Ingredientes: {$plato['ingredientes']}</p>";
            echo "<p>Tipo: {$plato['tipo']}</p>";
            echo "<a href='Editar.php?id=$id'>Editar</a>";
        }
    } else {
        echo "<p>No hay platos guardados</p>";
    }
    ?>
    
    <br><hr>
    <a href="Almacenardatos.php">Añadir nuevo plato</a>
    <br>
    <a href="index.html">Inicio</a>
</body>
</html>