<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=utf-8");

require_once 'modelo.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {

    case 'GET':
        try {
            $tareas = obtenerTareas();
            echo json_encode($tareas);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
        break;

    case 'POST':
        try {
            $datos = json_decode(file_get_contents('php://input'), true);

            if (!isset($datos['titulo']) || empty(trim($datos['titulo']))) {
                echo json_encode(['error' => 'El título es obligatorio']);
                exit;
            }

            crearTarea($datos['titulo']);

            echo json_encode(['mensaje' => 'Tarea creada correctamente']);

        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['mensaje' => 'Método no permitido']);
        break;
}
?>
