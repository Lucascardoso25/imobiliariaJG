<?php
require_once '../config/database.php';
require_once 'Cidade.php';

class CidadeRepository
{
    private $conn;

    public function __construct()
    {
        $db = Database ::getInstance();
        $this->conn = $db->getConnection();
    }

public function salvar(Cidade $cidade)
{
    $stmt = $this->conn->prepare(
        "INSERT INTO cidades (nome, estado) VALUES (?, ?)"

    );
    $stmt->execute([
        $cidade->getNome(),
        $cidade->getEstado()
    ]);

}

public function lista()
{
    $stmt = $this->conn->query("SELECT * FROM cidades");
    $dados = $stmt->fetchALL(PDO::FETCH_ASSOC);
    $cidades = [];

    foreach ($dados as $linha) {
        $cidade = new Cidade(
            $linha['nome'],
            $linha['estado']
        );
        $cidade->setID($linha['id']);
        $cidades[] = $cidade;
    }
    return $cidades;
}
}

?>