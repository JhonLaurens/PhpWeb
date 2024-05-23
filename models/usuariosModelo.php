<?php
require_once '../config/db.php';

class UsuarioModelo {
    private $id;
    private $nombre;
    private $email;
    private $contrasena;
    private $tipo_usuario;

    // conexion a la base de datos
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    // getters y setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $this->db->real_escape_string($id);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $this->db->real_escape_string($contrasena);
    }

    public function getTipoUsuario() {
        return $this->tipo_usuario;
    }

    public function setTipoUsuario($tipo_usuario) {
        $this->tipo_usuario = $this->db->real_escape_string($tipo_usuario);
    }

    public function guardarUsuario() {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getEmail()}', '{$this->getContrasena()}', '{$this->getTipoUsuario()}');";
        $guardar = $this->db->query($sql);
        $result = false;
        if($guardar){
            $result = true;
        }
        return $result;
    }

    //metodo para validar email y contraseña

    public function validarUsuario($email, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contrasena'";
        $usuario = $this->db->query($sql);
        $result = false;
        if($usuario && $usuario->num_rows == 1){
            $result = $usuario->fetch_object();
        }
        return $result;
    }
    
    
    
    

    
}
    
?>