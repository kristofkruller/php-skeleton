<?php
$host = getenv('DB_HOST') ?: 'postgres';
$db   = getenv('DB_NAME') ?: 'appdb';
$user = getenv('DB_USER') ?: 'appuser';
$pass = getenv('DB_PASS') ?: 'secret';
$port = getenv('DB_PORT') ?: '5432';

$dsn = "pgsql:host=$host;port=$port;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query('SELECT version();');
    $version = $stmt->fetchColumn();
    echo "Postgres connection successful. Version: $version\n";
    exit(0); // siker
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
    exit(1); // hiba
}