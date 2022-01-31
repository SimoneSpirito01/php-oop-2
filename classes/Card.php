<?php

class Card {
    private $numero;
    private $scadenza;
    private $cvv;

    public function __construct($_numero, $_scadenza, $_cvv) {
        
        $this->numero = $_numero;
        $this->setScadenza($_scadenza);
        $this->cvv = $_cvv;
    }

    public function setScadenza($_scadenza) {

        if($_scadenza['year'] > date("Y")) {
            $this->scadenza = $_scadenza;
        } else {
            throw new Exception('La carta è scaduta');
        }
    }
}

