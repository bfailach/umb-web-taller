<?php

$host = "aws-0-us-east-1.pooler.supabase.com"; // ← HOST IPv4 CORRECTO
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "[8th6ei5bbOVNKCLO]";

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

    echo "Conexión exitosa a Supabase";
} catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
    exit();
}

?>
