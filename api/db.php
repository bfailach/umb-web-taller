<?php

$host = "aws-1-us-east-1.pooler.supabase.com";
$port = "5432";
$dbname = "postgres";
$user = "postgres.nhahulwdintyfzbbhzcg";
$password = "o7enJsZR4f8Hv0wn";

try {
    $conexion = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    // NADA AQUÍ. SIN echo, SIN texto. 
} catch (PDOException $e) {
    // Aquí sí, porque no hay conexión y debes retornar algo
    die(json_encode(["error" => "Error al conectar: " . $e->getMessage()]));
}

?>
