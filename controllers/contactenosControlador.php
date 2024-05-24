<?php

require_once '../models/contactenosModelo.php';
if(isset($_POST)){
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;
    if($nombre && $email && $telefono && $mensaje){
        $contacto = new ContactenosModelo();
        $contacto->setNombre($nombre);
        $contacto->setEmail($email);
        $contacto->setTelefono($telefono);
        $contacto->setMensaje($mensaje);
        $save = $contacto->guardarMensaje();
        if($save){
            // message saved successfully
            header('Location: contactenos.php?success=Mensaje guardado correctamente');
            exit();
        }else{
            // failed to save message
            header('Location: contactenos.php?error=No se pudo guardar el mensaje');
            exit();
        }
    }
}