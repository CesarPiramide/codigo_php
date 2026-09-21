<?php
$usuarios = [
    "admin" => ["contraseña" => "admin12", "rol" => "Administrador", "color" => "#FF5733"],
    "editor" => ["contraseña" => "editor123", "rol" => "Editor", "color" => "#3498DB"],
    "invitado" => ["contraseña" => "invitado1234", "rol" => "Invitado", "color" => "#2ECC71"]
];

$loginCorrecto = false;
$mensajeError = "";
$usuarioActual = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Usuario"];
    $password = $_POST["Contraseña"];
    
    if (isset($usuarios[$username]) && $usuarios[$username]["contraseña"] == $password) {
        $loginCorrecto = true;
        $usuarioActual = $username;
    } else {
        $mensajeError = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (!$loginCorrecto): ?>
        <h2>Iniciar Sesión</h2>
        
        <?php if ($mensajeError): ?>
            <p style="color: red;"><strong><?php echo $mensajeError; ?></strong></p>
        <?php endif; ?>
        
        <form method="POST" action="">
            <label>Usuario:</label>
            <input name="Usuario" type="text" required> <br>

            <label>Contraseña:</label>
            <input name="Contraseña" type="password" required><br>

            <input type="submit" value="Iniciar Sesión">
        </form>
        
    <?php else: ?>
        <h2>¡Bienvenido!</h2>
        
        <p><strong>Usuario:</strong> <?php echo $usuarioActual; ?></p>
        <p><strong>Rol:</strong> <?php echo $usuarios[$usuarioActual]["rol"]; ?></p>
        <p><strong>Color:</strong> <?php echo $usuarios[$usuarioActual]["color"]; ?></p>
        
        <form method="POST" action="">
            <input type="submit" value="Cerrar Sesión">
        </form>
    <?php endif; ?>
</body>
</html>
