<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $address;
    protected $card;
    protected $sconto = 0;
    
    public function __construct($_nome, $_cognome, $_email, $_address) {

        $this->setNome($_nome);
        $this->setCognome($_cognome);
        $this->setEmail($_email);
        $this->setAddress($_address);
        
    }

    public function setNome($_nome) {
        
        if(strlen($_nome) > 3) {
            $this->nome = $_nome;
        }
    }

    public function getNome() {

        return $this->nome;
    }

    public function setCognome($_cognome) {
        
        if(strlen($_cognome) > 3) {
            $this->cognome = $_cognome;
        }
    }

    public function getCognome() {

        return $this->cognome;
    }

    public function setEmail($_email) {
        
        if(str_contains($_email, '@')) {
            if(str_contains($_email, '.')) {
                $this->email = $_email;
            }
        }
    }

    public function getEmail() {

        return $this->email;
    }

    public function setAddress($_address) {
        
        $this->address = $_address;
    }

    public function getAddress() {

        return $this->address;
    }

    public function setCard($_card) {

        $this->card = $_card;
    }

    public function getCard() {

        return $this->card;
    }
}