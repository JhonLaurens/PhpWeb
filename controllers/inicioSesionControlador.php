<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../models/usuariosModelo.php';
    
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : null; 

    if (!$email || !$contrasena) { 
        header('Location: ../views/inicioSesion.php?camposIncompletos=1');
        exit;
    }

    $usuarioModelo = new UsuarioModelo();
    $usuario = $usuarioModelo->verificarUsuario($email, $contrasena); 

    session_start();
    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['mensaje'] = 'Inicio exitoso';
    } else {
        $_SESSION['mensaje'] = 'Inicio fallido';
    }
    header('Location: ../views/Home.php');
    exit;
} else {
    echo "El método de solicitud no es POST. Método actual: " . $_SERVER['REQUEST_METHOD'];
}
?>