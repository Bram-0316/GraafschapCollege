<?php

//Opdracht 1

//variables
$tijd = date("G");

echo "het is $tijd uur";

echo "<br>";

if ($tijd >= 6 && $tijd <12) {
    echo "Het is ochtend";
}   elseif ($tijd >= 12 && $tijd < 18) {
    echo "Het is middag";
}   elseif ($tijd >= 18 && $tijd < 24) {
    echo "Het is avond";
}   elseif ($tijd >= 24 && $tijd < 6) {
    echo "nacht";
}

echo "<hr>";

//Opdracht 2

$Tijd = 11;
echo "Het is $Tijd uur";
echo "<br>";
$resultaat = match ($Tijd) {
    6, 7, 8, 9, 10, 11 => "het is ochtend",
    12, 13, 14, 15, 16, 17 => "het is middag",
    18, 19, 20, 21, 22, 23 => "het is avond",
    24, 1, 2, 3, 4, 5 => "het is nacht",
    default => "het is geen tijd",
};
echo "$resultaat";

echo "<hr>";

//Opdracht 3
$cijfer1 = 9;
$cijfer2 = 10;

if ($cijfer2 < $cijfer1) {
        $Result=$cijfer1*2+$cijfer2;
        Echo $Result;
}   else{
    $result=$cijfer2*2+$cijfer1;
    echo $result;
}

echo "<hr>";

//Opdracht 4

//Variables
$prijs = 125;

if ($prijs >150){
    $RESULTAAT = $prijs/100*119;
    echo "De oude prijs is $prijs maar na de verhoging van 19% is het $RESULTAAT";
}   elseif($prijs <55){
    $RESULTAAT = $prijs/100*111;
    echo "De oude prijs is $prijs maar na de verhoging van 11% is het $RESULTAAT";
}   else{
    $RESULTAAT = $prijs/100*116;
    echo "De oude prijs is $prijs maar na de verhoging van 16% is het $RESULTAAT";
}

echo "<hr>";

//Opdracht 5

