<?php
include 'Conexion.php';

$id = $_POST['id'] ?? 0;


$sql = "delete from plato_ingrediente where plato_id = :id";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();


$sql = "delete from plato where id = :id";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();


header("Location: Verdatos.php");
exit;
?>