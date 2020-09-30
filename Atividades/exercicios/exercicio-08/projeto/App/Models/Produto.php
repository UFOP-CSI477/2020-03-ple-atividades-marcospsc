<?php

namespace App\Models;

class Produto implements ModelInterface{

    private $nome, $um, $valor, $qtd;

    public function __construct($nome, $um, $valor, $qtd){

        $this->nome = $nome;
        $this->um = $um;
        $this->valor = $valor;
        $this->qtd = $qtd;
    }

    public function __destruct(){

    }

    public function getAll(){

    }

    public function get(){
        
    }
}