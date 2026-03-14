<?php

require_once '../app/models/Cidade.php';
try{

    // criando objeto
    $cidade = new Cidade("Itapira", "sp");
    $cidade->setId(1);

    echo "<h2> Dados da cidade </h2>";
    echo "ID: " . $cidade->getId() . "<br>";
    echo "Nome: " . $cidade->getNome() . "<br>";
    echo "Estado: " . $cidade->getEstado() . "<br>";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}


?>