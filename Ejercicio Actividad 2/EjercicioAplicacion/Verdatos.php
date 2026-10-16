<?php
include 'Conexion.php';
include 'platos.php';

$buscar = $_GET['buscar'] ?? "";

if ($buscar == "") {
    $sql = $conexion->query("SELECT * FROM plato");
} else {
    $sql = $conexion->prepare("SELECT * FROM plato WHERE nombre = ?");
    $sql->execute([$buscar]);
}

$platos = [];
foreach ($sql->fetchAll() as $fila) {
    $platos[] = new Plato($fila['nombre'], $fila['precio'], $fila['tipo'], [], $fila['id']);
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
    foreach($platos as $plato){
        echo "<h3>{$plato->nombre} : {$plato->precio} €</h3>";
        echo "<a href='Veringredientes.php?id={$plato->id}'>Ver Ingredientes</a> ";
        echo "<form action='Borrar.php' method='POST'>";
        echo "<input type='hidden' name='id' value='{$plato->id}'>";
        echo "<button type='submit'>Borrar</button>";
        echo "</form>";
    }
    ?>

    <br><hr>
    <a href="Almacenardatos.php">Añadir nuevo plato</a>
    <a href="index.html">Volver a inicio</a>
</body>
</html>