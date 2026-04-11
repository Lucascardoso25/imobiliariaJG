<?php

require_once '../app/models/Cidade.php';
require_once '../app/models/CidadeRepository.php';

try {
    $repository = new CidadeRepository();

    $cidade = new Cidade("Mogi Mirim", "SP");

    //salvando no bd
    $repository->salvar($cidade);

    echo "<h3>Cidade salva com sucesso!</h3>";

    //listando cidades
    $cidades = $repository->lista();

    foreach ($cidades as $cidade) {

    echo"ID:" . $cidade->getID() . "<br>";
    echo"Nome:" . $cidade->getNome() . "<br>";
    echo"Estado:" . $cidade->getEstado() . "<br>";
    echo "<hr>";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}


?>