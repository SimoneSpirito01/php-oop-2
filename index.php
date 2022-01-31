<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Card.php';

$simone = new User("Simone", "Spirito", "simo@gmail.com", "via 20 settembre, 10 - Como(CO)");
$pagamento = new Card("4212939904758345", ["month" => "12", "year" => "2024"], "302");
$simone->setCard($pagamento);

$iphone = new Product("Iphone 13", "Apple", "1200");

var_dump($simone);
var_dump($iphone);

?>