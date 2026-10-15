<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo plato</title>
</head>

<body>
    <?php
    include_once 'components/nav.php';
    ?>
    <h1>Nuevo plato</h1>
    <form action="logica.php" method="POST">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" id="Nombre" required>
        <br>

        <p>Ingredientes:</p>
        <?php
        $lista = ["Huevo", "Patata", "Cebolla", "Arroz", "Pollo", "Sal", "Tomate", "Ajo",
                  "Leche", "Azúcar", "Harina", "Queso", "Jamón", "Pimiento", "Aceite"];

        foreach ($lista as $ingrediente) {
            echo "<label>$ingrediente</label>";
            echo "<input type='checkbox' name='ingredientes[]' value='$ingrediente'><br>";
        }
        ?>
        <br>

        <label for="Tipo">Tipo (primero/segundo/postre):</label>
        <input type="text" name="Tipo" id="Tipo" required>
        <br>

        <label for="Precio">Precio:</label>
        <input type="number" step="0.01" name="Precio" id="Precio" required>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>

</html>

