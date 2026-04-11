<?php

require_once '../config/database.php';

$db = Database::getInstance();
$conn = $db->getConnection();

echo "Conexão realizada com sucesso <br>";

$stmt = $conn->prepare(
    "INSERT INTO cidades (nome, estado) VALUES (?, ?)"
);
$stmt->execute(["Itapira", "SP"]);

$stmt = $conn->query("SELECT * FROM cidades");
$cidades = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($cidades);
echo "</pre>";

?>