<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <!-- Agrega los siguientes enlaces a tu archivo HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmcke49h" crossorigin="anonymous">
    <style>
        /* Agrega los siguientes estilos a tu archivo CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #669933;
            color: #080808;
        }
        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.25rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            max-width: 40rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            margin-bottom: 1rem;
        }
        input[type="submit"] {
            background-color: #7fc142;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 1rem;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #fff;
            color: #7fc142;
            border: 1px solid #7fc142;
        }
    </style>
</head>
<body>
    <form action="../controllers/usuariosControlador.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <label for="tipo_usuario">Tipo de usuario:</label><br>
        <input type="text" id="tipo_usuario" name="tipo_usuario" required><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>