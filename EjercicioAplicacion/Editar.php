<?php
session_start();


$id = $_GET['id'];


$plato = $_SESSION['platos'][$id];


if(isset($_POST['EditarIngredientes'])){

    $_SESSION['platos'][$id]['nombre'] =$_POST['EditarNombre'];
    $_SESSION['platos'][$id]['ingredientes'] = $_POST['EditarIngredientes'];
    $_SESSION['platos'][$id]['precio'] = $_POST['EditarPrecio'];
    $_SESSION['platos'][$id]['tipo'] = $_POST['EditarTipo'];
    

    header('Location: Verdatos.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar los platos</title>
</head>
<body>
    <h1>Editar Plato</h1>
    
    <form method="POST" action="">

        <label for="EditarNombre">Editar nombre del plato:</label>
        <input name="EditarNombre" value="<?php echo $plato['Nombre']; ?>" ><br><br>

        <label for="EditarIngredientes">Ingredientes a editar:</label>
        <input type="text" name="EditarIngredientes" value="<?php echo $plato['ingredientes']; ?>" ><br><br>

        <label for="EditarPrecio">Edita el precio:</label>
        <input type="number" name="EditarPrecio" value="<?php echo $plato['precio']; ?>" ><br><br>

        <label for="EditarTipo">Editar el tipo:</label>
        <input name="EditarTipo" value="<?php echo $plato['Tipo']; ?>" ><br><br>
 
        <input type="submit" value="Guardar">
    </form>
    
    <br>
    <a href="Verdatos.php">Volver a la lista</a>
    <br>
    <a href="index.html">Volver a inicio</a>
</body>
</html>