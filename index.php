<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserBusiness.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Card.php';

$simone = new User("Simone", "Spirito", "simo@gmail.com", "via 20 settembre, 10 - Como(CO)");
try {
    $cartaSimone = new Card("4212939904758345", ["month" => "04", "year" => "2022"], "302");
    $simone->setCard($cartaSimone);
} catch(Exception $e) {
    echo $e->getMessage() . '<br>';
}

$cecilia = new UserBusiness("Cecilia", "Rossi", "cecilia@gmail.com", "Via Volta, 30 - Como(CO)");
try {
    $cartaCecilia = new Card("4534903893244455", ["month" => "12", "year" => "2025"], "423");
    $cecilia->setCard($cartaCecilia);
} catch(Exception $e) {
    echo $e->getMessage() . '<br>';
}
$cecilia->setType('pro');
$cecilia->setSconto();

$iphone = new Product("Iphone 13", "Apple", "1200");
$iphone->setPrezzoScontato($simone->getSconto());

$macbook = new Product("Macbook Air", "Apple", "1100");
$macbook->setPrezzoScontato($cecilia->getSconto());

var_dump($simone);
var_dump($iphone);
var_dump($cecilia);
var_dump($macbook);

?>