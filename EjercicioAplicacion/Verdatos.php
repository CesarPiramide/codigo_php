<?php
include 'platos.php';

if(isset($_GET['buscar'])){
    $buscar = $_GET['buscar'];
}
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Listado de Platos</h1>

    <form method="get">
        <input name="buscar">
        <input type="submit" value="Buscar">
    </form>

    <?php
    foreach($platos as $id => $plato){
        if($buscar == "" || $plato['nombre'] == $buscar){
            echo "<h3>{$plato['nombre']} : {$plato['precio']} €</h3>";
            echo "<a href='Veringredientes.php'>Ver Ingredientes</a> ";
            echo "<a href='Editar.php?id=$id'>Editar</a> ";
            echo "<a href='Borrar.php?id=$id'>Borrar</a>";
        }
    }
    ?>

    <br><hr>
    <a href="Almacenardatos.php">Añadir nuevo plato</a>
    <a href="index.html">Volver a inicio</a>
</body>
</html>