<?php
include 'Conexion.php';
include 'platos.php';

$id = $_GET['id'] ?? 0;

$sql = "select * from plato where id = :id";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$fila = $stmt->fetch(PDO::FETCH_ASSOC);

$plato = new Plato($fila['nombre'], $fila['precio'], $fila['tipo'], [], $fila['id']);

$sql = "select ingrediente.nombre
        from ingrediente
        join plato_ingrediente on ingrediente.id = plato_ingrediente.ingrediente_id
        where plato_ingrediente.plato_id = :id
        order by ingrediente.nombre";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$plato->ingredientes = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de ingredientes</title>
</head>
<body>
    <h1><?php echo $plato->nombre; ?> : <?php echo $plato->precio; ?> €</h1>

    <a href="Verdatos.php">Volver a la lista</a>
</body>
</html>