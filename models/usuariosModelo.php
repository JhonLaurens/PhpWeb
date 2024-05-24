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
        $sql = "INSERT INTO usuarios VALUES(NULL, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $contrasena = password_hash($this->getContrasena(), PASSWORD_DEFAULT);
        $stmt->bind_param("ssss", $this->getNombre(), $this->getEmail(), $contrasena, $this->getTipoUsuario());

        $result = $stmt->execute();
        return $result;
    }

    public function verificarUsuario($email, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();
        
        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            return $usuario;
        } else {
            return false;
        }
    }
}
?>