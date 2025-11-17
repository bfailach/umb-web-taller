<?php

$host = "db.nhahulwdintyfzbbhzcg.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "[8th6ei5bbOVNKCLO]";

try {
    $conexion = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $password
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a Supabase";
} catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
    exit();
}

?>
