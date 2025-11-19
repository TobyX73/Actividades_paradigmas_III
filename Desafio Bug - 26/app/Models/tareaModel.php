<?php
require_once __DIR__ . '/Database.php';

class TareaModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function crearTarea($descripcion) {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("INSERT INTO tareas (descripcion) VALUES (?)");
        return $stmt->execute([$descripcion]);
    }

    public function obtenerTareas() {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->query("SELECT * FROM tareas ORDER BY completada ASC, id DESC");
        return $stmt->fetchAll();
    }

    public function actualizarEstado($id, $completada) {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("UPDATE tareas SET completada = ? WHERE id = ?");
        // Convertimos a int para seguridad
        return $stmt->execute([(int)$completada, (int)$id]);
    }

    public function eliminarTarea($id) {
        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("DELETE FROM tareas WHERE id = ?");
        return $stmt->execute([(int)$id]);
    }
}
?>