<?php
require_once 'config/db.php';

class ReservaModelo {
    private $id_reserva;
    private $id_usuario;
    private $id_habitacion;
    private $fecha_entrada;
    private $fecha_salida;

    // conexion a la base de datos
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    // getters y setters
    public function getIdReserva() {
        return $this->id_reserva;
    }

    public function setIdReserva($id_reserva) {
        $this->id_reserva = $this->db->real_escape_string($id_reserva);
    }

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $this->db->real_escape_string($id_usuario);
    }

    public function getIdHabitacion() {
        return $this->id_habitacion;
    }

    public function setIdHabitacion($id_habitacion) {
        $this->id_habitacion = $this->db->real_escape_string($id_habitacion);
    }

    public function getFechaEntrada() {
        return $this->fecha_entrada;
    }

    public function setFechaEntrada($fecha_entrada) {
        $this->fecha_entrada = $this->db->real_escape_string($fecha_entrada);
    }

    public function getFechaSalida() {
        return $this->fecha_salida;
    }

    public function setFechaSalida($fecha_salida) {
        $this->fecha_salida = $this->db->real_escape_string($fecha_salida);
    }

    public function guardarReserva() {
        $sql = "INSERT INTO reservas VALUES(NULL, '{$this->getIdUsuario()}', '{$this->getIdHabitacion()}', '{$this->getFechaEntrada()}', '{$this->getFechaSalida()}');";
        $guardar = $this->db->query($sql);
        $result = false;
        if($guardar){
            $result = true;
        }
        return $result;
    }
}
?>