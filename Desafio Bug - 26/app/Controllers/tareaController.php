<?php
require_once ROOT_PATH . '/app/Models/TareaModel.php'; 

class TareaController {
    private $model;

    public function __construct() {
        $this->model = new TareaModel();
    }

    public function index() {
        $tareas = $this->model->obtenerTareas();
        // CORRECCIÓN: Ruta absoluta hacia la Vista
        require_once ROOT_PATH . '/app/Views/task_list.php'; 
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['descripcion'])) {
            $descripcion = htmlspecialchars(trim($_POST['descripcion']));
            $this->model->crearTarea($descripcion);
        }
        header("Location: index.php"); 
        exit();
    }

    public function eliminar() {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $this->model->eliminarTarea($id);
        }
        header("Location: index.php");
        exit();
    }
    
    public function completar() {
        if (isset($_GET['id']) && isset($_GET['estado'])) {
            $id = (int)$_GET['id'];
            $estado = (int)$_GET['estado'];
            $this->model->actualizarEstado($id, $estado);
        }
        header("Location: index.php");
        exit();
    }
}
?>