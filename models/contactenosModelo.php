<?php
require_once '../config/db.php';
class ContactenosModelo {
    private $id_contacto;
    private $nombre;
    private $email;
    private $telefono;
    private $mensaje;
    private $db;
    public function __construct() {
        $this->db = Database::connect();
    }
    // getters and setters for each property...


    public function getIdContacto() {
        return $this->id_contacto;
    }

    public function setIdContacto($id_contacto) {
        $this->id_contacto = $this->db->real_escape_string($id_contacto);
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

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $this->db->real_escape_string($telefono);
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $this->db->real_escape_string($mensaje);
    }

    
    public function guardarMensaje() {
        $sql = "INSERT INTO contactenos VALUES(NULL, '{$this->getNombre()}', '{$this->getEmail()}', '{$this->getTelefono()}', '{$this->getMensaje()}');";
        $guardar = $this->db->query($sql);
        $result = false;
        if($guardar){
            $result = true;
        }
        return $result;
    }
}
?>