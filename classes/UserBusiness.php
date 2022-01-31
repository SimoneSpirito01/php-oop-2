<?php

class UserBusiness extends User {
    protected $type;

    public function setType($_type) {

        $this->type = $_type;
    }

    public function setSconto() {
        
        switch($this->type) {

            case 'basic':
                $this->sconto = 10;
                break;
            
            case 'prime':
                $this->sconto = 20;
                break;
                
            case 'pro':
                $this->sconto = 25;
        }
    }
}