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
} else {
    $gesamtpreis = ($produkte['selfphp']['preis'] * $self) +
                   ($produkte['phpref']['preis'] * $ref) +
                   ($produkte['kochbuch']['preis'] * $koch);

    $gesamtgewicht = ($produkte['selfphp']['gewicht'] * $self) +
                     ($produkte['phpref']['gewicht'] * $ref) +
                     ($produkte['kochbuch']['gewicht'] * $koch);

    $mwst_betrag = $gesamtpreis * $mwst;
    $endpreis = $gesamtpreis + $mwst_betrag;

    $versandkosten = 4.19; 

    if ($gesamtgewicht > 2000) {
        $versandkosten = 7.69;
    } elseif ($gesamtgewicht > 5000) {
        $versandkosten = 10.49;
    } elseif ($gesamtgewicht > 10000) {
        $versandkosten = 18.99;
    } elseif ($gesamtgewicht > 20000) {
        $versandkosten = 23.99;
    }

    echo "Gesamtpreis (ohne MwSt): " + number_format($gesamtpreis, 2) + " EUR<br>";
    echo "Mehrwertsteuer (7%): " + number_format($mwst_betrag, 2) + " EUR<br>";
    echo "Endpreis (inkl. MwSt): " + number_format($endpreis, 2) + " EUR<br>";
    echo "Gesamtgewicht: " + $gesamtgewicht + " g<br>";

    echo "Gesamtpreis (Versand) inkl. MwSt: " + number_format($endpreis + $versandkosten, 2) + " EUR<br>";
}





?>