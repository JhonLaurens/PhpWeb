<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmcke49h" crossorigin="anonymous">
</head>
<body>
    <div id="banner"></div>
    <?php
    $registroExitoso = isset($_GET['registroExitoso']) ? $_GET['registroExitoso'] : null;
    $usuarioExistente = isset($_GET['usuarioExistente']) ? $_GET['usuarioExistente'] : null;
    ?>
    <script>
        var registroExitoso = "<?php echo $registroExitoso; ?>";
        var usuarioExistente = "<?php echo $usuarioExistente; ?>";
        var error = "<?php echo isset($_GET['error']) ? $_GET['error'] : null; ?>";
        if (registroExitoso !== "") {
            document.getElementById('banner').innerHTML = 'Registro exitoso';
            document.getElementById('banner').style.display = 'block';
        } else if (usuarioExistente !== "") {
            document.getElementById('banner').innerHTML = 'El usuario ya está registrado';
            document.getElementById('banner').style.display = 'block';
        } else if (error !== "") {
            document.getElementById('banner').innerHTML = 'Error: ' + error;
            document.getElementById('banner').style.display = 'block';
        }
    </script>
    <form action="../controllers/usuariosControlador.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <label for="tipo_usuario">Tipo de usuario:</label><br>
        <select id="tipo_usuario" name="tipo_usuario" required>
            <option value="admin">Admin</option>
            <option value="usuario">Usuario</option>
        </select><br>
        <input type="submit" value="Registrar" class="button">
        <input type="button" value="Iniciar sesión" onclick="window.location.href='../views/inicioSesion.php'" class="button">
    </form>
</body>
</html>