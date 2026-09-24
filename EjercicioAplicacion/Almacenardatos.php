<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina sobre tiempos de carrera</title>
    <h2>Aqui podras introducir los tiempos que realiza cada corredor</h2><hr>
</head>
<body>
    <form action="logica.php" method="post">
        <label for="Nombre">Introduce el nombre:</label>
        <input name="Nombre" required> <br>

        <label for="Dorsal">Introduce el numero del dorsal</label>
        <input name="Dorsal" required> <br>

        <label for="Tiempo">Introduce el tiempo de carrera:</label>
        <input name="Tiempo" required> <br>

        <input type="Submit">
    </form>
</body>
</html>