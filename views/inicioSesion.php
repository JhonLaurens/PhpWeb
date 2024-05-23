<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmcke49h" crossorigin="anonymous">
    <style>
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
        #banner {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: #7fc142;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="banner"></div>
    <form action="../controllers/usuariosControlador.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>