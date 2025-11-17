<?php
session_start(); 

$input = file_get_contents('php://input');

$data = json_decode($input, true);

$usuario = $data['usuario'] ?? ($_POST['usuario'] ?? null);

if ($usuario) {

    $usuario = htmlspecialchars($usuario);

    $_SESSION["usuario"] = $usuario;

    echo json_encode([
        "mensaje" => "Sesión iniciada correctamente",
        "usuario" => $_SESSION["usuario"]
    ]);
    exit;
}

echo json_encode([
    "error" => "No se recibió el nombre de usuario"
]);
?>
