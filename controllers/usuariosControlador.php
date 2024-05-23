<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../models/usuariosModelo.php';
    
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : null;
    $tipo_usuario = isset($_POST['tipo_usuario']) ? trim($_POST['tipo_usuario']) : null;
    if ($nombre && $email && $contrasena && $tipo_usuario) {
        $usuario = new UsuarioModelo();
        $usuario->setNombre($nombre);
        $usuario->setEmail($email);
        $usuario->setContrasena($contrasena);
        $usuario->setTipoUsuario($tipo_usuario);
        try {
            $guardar = $usuario->guardarUsuario();
            if ($guardar) {
                header('Location: ../views/registro.php?registroExitoso=1');
                exit;
            } else {
                throw new Exception('Error al guardar el usuario');
            }
        } catch (PDOException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                // Código de error 1062 significa 'entrada duplicada'
                header('Location: ../views/registro.php?usuarioExistente=1');
                exit;
            } else {
                // Solo redirige al usuario con el parámetro 'error' si el error no es una duplicación de entrada
                header('Location: ../views/registro.php?error=' . urlencode($e->getMessage()));
                exit;
            }
        } catch (Exception $e) {
            // Solo redirige al usuario con el parámetro 'error' si el error no es una duplicación de entrada
            header('Location: ../views/registro.php?error=' . urlencode($e->getMessage()));
            exit;
        }
    }
}