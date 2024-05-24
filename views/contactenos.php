<!DOCTYPE html>
<html>
<head>
    <title>Contactenos</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmcke49h" crossorigin="anonymous">
</head>
<body>
    <div id="banner"></div>
    <?php
    $mensajeGuardado = isset($_GET['mensajeGuardado']) ? $_GET['mensajeGuardado'] : null;
    ?>
    <script>
        var mensajeGuardado = "<?php echo $mensajeGuardado; ?>";
        var error = "<?php echo isset($_GET['error']) ? $_GET['error'] : null; ?>";
        if (mensajeGuardado !== "") {
            document.getElementById('banner').innerHTML = 'Mensaje guardado exitosamente';
            document.getElementById('banner').style.display = 'block';
        } else if (error !== "") {
            document.getElementById('banner').innerHTML = 'Error: ' + error;
            document.getElementById('banner').style.display = 'block';
        }
    </script>
    <form action="../controllers/contactenosControlador.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="telefono">Telefono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" required></textarea><br>
        <input type="submit" value="Enviar" class="button">
    </form>
</body>
</html>