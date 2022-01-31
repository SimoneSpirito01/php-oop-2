<?php

class Product {
    protected $nome;
    protected $marca;
    protected $prezzo;

    public function __construct($_nome, $_marca, $_prezzo) {

        $this->nome = $_nome;
        $this->marca =$_marca;
        $this->prezzo = $_prezzo;
    }
}