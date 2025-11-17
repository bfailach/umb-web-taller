<?php

$host = "aws-1-us-east-1.pooler.supabase.com";
$port = "5432";
$dbname = "postgres";
$user = "postgres.nhahulwdintyfzbbhzcg";
$password = "o7enJsZR4f8Hv0wn"; // solo el texto, sin corchetes ni comillas raras

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

    echo "Conexión exitosa a Supabase usando pooler.";
} catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
    exit();
}

?>
