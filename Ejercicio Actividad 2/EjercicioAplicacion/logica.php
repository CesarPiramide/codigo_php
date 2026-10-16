<?php
include 'Conexion.php';
include 'platos.php';

$nombre = $_POST['Nombre'] ?? '';
$precio = $_POST['Precio'] ?? 0;
$tipo = $_POST['Tipo'] ?? '';
$ingredientes = $_POST['ingredientes'] ?? [];

$plato = new Plato($nombre, $precio, $tipo, $ingredientes);

// 1. Guardar el plato
$sql = "insert into plato (nombre, precio, tipo) values (:nombre, :precio, :tipo)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $plato->nombre, PDO::PARAM_STR);
$stmt->bindParam(':precio', $plato->precio, PDO::PARAM_STR);
$stmt->bindParam(':tipo', $plato->tipo, PDO::PARAM_STR);
$stmt->execute();

// 2. Coger el id que MySQL le ha puesto al plato
$plato->id = $conexion->lastInsertId();

// 3. Guardar los ingredientes marcados
foreach ($plato->ingredientes as $ingrediente) {
    $sql = "insert into plato_ingrediente (plato_id, ingrediente_id)
            select :plato_id, id from ingrediente where nombre = :nombre";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':plato_id', $plato->id, PDO::PARAM_INT);
    $stmt->bindParam(':nombre', $ingrediente, PDO::PARAM_STR);
    $stmt->execute();
}

header("Location: Verdatos.php");
exit;
?>
  