<?php

require_once '../app/models/Cidade.php';
require_once '../app/models/CidadeRepository.php';

class CidadeController
{
    private $repository;

    public function _construct()
    {
        $this->repository = new CidadeRepository();
    }

    //lista todas as cidades
    public function index()
    {
        $cidades = $this->repository->listar();

        //envia dados para view
        require '../views/cidades/index.php';
    }
}