<?php

if (isset($_POST)) {
    require_once 'models/UsuarioModelo.php';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    // esto es un operador ternario, es una forma de simplificar un if else
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;
    if ($nombre && $email && $mensaje) {
        $usuario = new UsuarioModelo();
        $usuario->setNombre($nombre);
        $usuario->setEmail($email);
        $usuario->setMensaje($mensaje);
        $guardar = $usuario->guardarContactenos();
        if ($guardar) {
            echo $guardar=1;
        } else {
            echo $guardar=0;
        }
    }
}


?>
