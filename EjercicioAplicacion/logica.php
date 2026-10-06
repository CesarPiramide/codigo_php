<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    El plato es:  <?php echo $_POST['Nombre'];?> <br>
    Los ingredientes son: <?php echo $_POST['Ingrediente'];?><br>
    Es un: <?php echo $_POST['Tipo']; ?> <br>
    Tiene un precio de: <?php echo $_POST['Precio']; ?><br>

    <br>
    <a href="Verdatos.php">Ver platos guardados</a>

</body>
</html>
  

<?php
    if(empty($_POST['Nombre'])){
        echo "El Nombre es obligatorio";
    } else{
        $mostrarnombre = ($_GET['Nombre']);
    }

    if(empty($_POST['Tipo'])){
        echo "No has introducido el tipo de plato";
    } else{
        $mostrartipo ($_GET['Tipo']);
    }

     $plato = array(
        'nombre' => $_POST['Nombre'],
        'ingredientes' => $_POST['Ingrediente'],
        'tipo' => $_POST['Tipo']
    );
?>