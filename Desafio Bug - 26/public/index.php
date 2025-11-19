<?php
// 1. Definir ROOT_PATH: Sube un nivel desde 'public' para llegar a la raíz del proyecto
define('ROOT_PATH', dirname(__DIR__));

// 2. Cargar el Controlador usando la ruta absoluta
require_once ROOT_PATH . '/app/Controllers/TareaController.php';

// 3. Inicializar Controlador
$controller = new TareaController();

// 4. Obtener acción (Routing)
$action = $_GET['action'] ?? 'index';

// 5. Enrutamiento básico
switch ($action) {
    case 'crear':
        $controller->crear();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    case 'completar':
        $controller->completar();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>