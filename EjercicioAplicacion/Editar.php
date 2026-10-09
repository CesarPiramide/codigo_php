<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar los platos</title>
</head>
<body>
    <h1>Editar Plato</h1>

    <form method="POST" action="Guardar.php">

        <label for="EditarNombre">Editar nombre del plato:</label>
        <input name="EditarNombre" value="<?php echo $plato['nombre']; ?>"><br><br>

        <label for="EditarIngredientes">Ingredientes a editar:</label>
        <input type="text" name="EditarIngredientes" value="<?php echo $plato['ingredientes']; ?>"><br><br>

        <label for="EditarPrecio">Edita el precio:</label>
        <input type="number" name="EditarPrecio" value="<?php echo $plato['precio']; ?>"><br><br>

        <label for="EditarTipo">Editar el tipo:</label>
        <input name="EditarTipo" value="<?php echo $plato['tipo']; ?>"><br><br>

        <input type="submit" value="Guardar">
    </form>

    <br>
    <a href="Verdatos.php">Volver a la lista</a>
    <br>
    <a href="index.html">Volver a inicio</a>
</body>
</html>