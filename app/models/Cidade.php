<?php
class Cidade
{
    public $id;
    public $nome;
    public $estado;


    public function __construct( string $nome, string  $estado)
    {
        // this é uma referencia ao objeto criado que esta sendo utilizado
        $this->setNome($nome);
        $this->setEstado($estado);
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    //string define que o metodo deve retornar
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setId($id)
    {
        if ($this->id === null){
            $this->id = $id;
            //se id for nulo vc pode trocar
        }
    }

    public function setNome(string $nome)
    {
        $nome = trim($nome);
        // Simples validação
        if (empty($nome)) {
            throw new Exception("O nome da cidade é obrigatorio.");
        }
        $this->nome = $nome;
    }

    public function setEstado(string $estado)
    {
        $estado = strtoupper(trim($estado));

        if (strlen($estado) !== 2) {
            throw new Exception("o estado deve conter exatamente 2 letras.");
        }

        $this->estado = $estado;
    }
}

?>