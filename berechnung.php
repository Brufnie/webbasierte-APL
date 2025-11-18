<?php
$produkte = [
   'selfphp' => ["name" => "self-php", "preis" => 25.40, "gewicht" => 800],
    'phpref' => ["name" => "php-ref", "preis" => 18.00, "gewicht" => 600],
    'kochbuch' => ["name" => "PHP-Kochbuch", "preis" => 39.00, "gewicht" => 1300]
];

$mwst = 0.07;

$self = (int)$_POST['Self-PHP'];
$ref = (int)$_POST['php-ref'];
$koch = (int)$_POST['PHP-Kochbuch'];

if($self < 0 || $ref < 0 || $koch < 0){
    echo "Ungültige Eingabe. Bitte geben Sie eine Zahl größer oder gleich 0 ein.";
    exit;
}



?>