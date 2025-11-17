<?php
require_once 'db.php';

function crearTarea($titulo) {
    global $conexion;

    $titulo_seguro = htmlspecialchars($titulo);

    $sql = "INSERT INTO tareas (titulo) VALUES (:titulo)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':titulo', $titulo_seguro, PDO::PARAM_STR);
    $stmt->execute();
}

function obtenerTareas() {
    global $conexion;

    $sql = "SELECT * FROM tareas ORDER BY id ASC";
    $stmt = $conexion->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function actualizarTarea($id, $nuevoTitulo) {
    global $conexion;

    $sql = "UPDATE tareas SET titulo = :titulo WHERE id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':titulo', $nuevoTitulo, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

function eliminarTarea($id) {
    global $conexion;

    $sql = "DELETE FROM tareas WHERE id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
?>
