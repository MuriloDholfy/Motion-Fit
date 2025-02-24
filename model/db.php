<?php
$host = "localhost";
$dbname = "motion_fit";
$user = "root";  // Substitua pelo seu usuário do MySQL
$password = "";  // Substitua pela senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
