<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../models/usuariosModelo.php';
    
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : null;
    $tipo_usuario = isset($_POST['tipo_usuario']) ? trim($_POST['tipo_usuario']) : null;

    // Verificar que todos los campos estén presentes
    if (!$nombre || !$email || !$contrasena || !$tipo_usuario) {
        header('Location: ../views/registro.php?camposIncompletos=1');
        exit;
    }

    // Si se envió el nombre y el tipo de usuario, asumimos que es un registro
    $usuario = new UsuarioModelo();
    $usuario->setNombre($nombre);
    $usuario->setEmail($email);
    $usuario->setContrasena($contrasena);
    $usuario->setTipoUsuario($tipo_usuario);
    try {
        $registroExitoso = $usuario->guardarUsuario();
        if ($registroExitoso) {
            header('Location: ../views/registro.php?registroExitoso=1');
            exit;
        } else {
            throw new Exception('Error al registrar el usuario');
        }
    } catch (PDOException $e) {
        header('Location: ../views/registro.php?error=' . urlencode($e->getMessage()));
        exit;
    } catch (Exception $e) {
        header('Location: ../views/registro.php?error=' . urlencode($e->getMessage()));
        exit;
    }
} else {
    echo "El método de solicitud no es POST. Método actual: " . $_SERVER['REQUEST_METHOD'];
}
?>