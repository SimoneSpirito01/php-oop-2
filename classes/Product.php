<?php

class Product {
    protected $nome;
    protected $marca;
    protected $prezzo;
    protected $prezzoScontato;

    public function __construct($_nome, $_marca, $_prezzo) {

        $this->nome = $_nome;
        $this->marca =$_marca;
        $this->prezzo = $_prezzo;
    }

    public function setPrezzoScontato($_sconto) {

        $this->prezzoScontato = $this->prezzo - ($this->prezzo / 100 * $_sconto);
    }
}