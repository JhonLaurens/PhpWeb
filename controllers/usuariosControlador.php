<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../models/usuariosModelo.php';
    
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : null;
    $tipo_usuario = isset($_POST['tipo_usuario']) ? trim($_POST['tipo_usuario']) : null;

    // Si se envió el nombre y el tipo de usuario, asumimos que es un registro
    if ($nombre && $email && $contrasena && $tipo_usuario) {
        // Código existente para el registro de usuarios
    } 
    // Si no se envió el nombre y el tipo de usuario, asumimos que es un inicio de sesión
    else if ($email && $contrasena) {
        $usuario = new UsuarioModelo();
        try {
            $usuarioValido = $usuario->validarUsuario($email, $contrasena);
            if ($usuarioValido) {
                header('Location: ../views/home.php');
                exit;
            } else {
                throw new Exception('Correo electrónico o contraseña incorrectos');
            }
        } catch (PDOException $e) {
            header('Location: ../views/inicioSesion.php?error=' . urlencode($e->getMessage()));
            exit;
        } catch (Exception $e) {
            header('Location: ../views/inicioSesion.php?error=' . urlencode($e->getMessage()));
            exit;
        }
    } else {
        header('Location: ../views/registro.php?camposIncompletos=1');
        exit;
    }
}
?>