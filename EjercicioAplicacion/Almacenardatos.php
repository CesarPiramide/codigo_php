<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina sobre mi restaurante</title>
    <h2>Aqui podras introducir todo sobre los platos</h2><hr>
</head>
<body>
    <form action="logica.php" method="post">
        <label for="Nombre">Introduce el nombre del plato:</label>
        <input name="Nombre" required> <br>

        <label for="Ingrediente">Introduce los ingredientes:</label>
        <input name="Ingrediente" required> <br>

        <label for="Tipo">Introduce si es primero/segundo/postre</label>
        <input name="Tipo" required> <br>

        <label for="Precio">Introduce el precio:</label>
        <input name="Precio" required> <br> 

        <input type="Submit">
    </form>

    <br>
    <a href="Verdatos.php">Ver platos guardados</a>
    <a href="index.html">Volver a inicio</a>
</body>
</html>