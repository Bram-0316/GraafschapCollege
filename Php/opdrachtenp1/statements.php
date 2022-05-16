
<?php


//Variables
$voldoende = 5.5;
$cijfer = rand(1,10);

echo "$cijfer is een ";
if($cijfer >= $voldoende) {
    echo "Voldoende";
} else{
    echo "Onvoldoende";
}

?>
 <hr>
<?php
//Opdracht 2

//  assignment declaration
$assignment = 1;

//  Gender declaration
$gender = "f";


//  if conditions are true excecute assignement 1
if ($assignment == 1) {
    //  Condition for gender activity
    if ($gender === "m") {
        echo "Lets watch a soccer game!";
    } elseif ($gender === "f") {
        echo "Lets go shopping!";
    } elseif ($gender === "x") {
        echo "you can choose between shopping and a soccer game!";
    } else {
        echo "please define your gender";
    }
}

//  if conditions are true excecute assignement 2
if ($assignment == 2) {
    //  Condition for gender activity with more string options
    if ($gender === "m" || $gender === "male") {
        echo "Lets watch a soccer game!";
    } elseif ($gender === "f" || $gender === "female") {
        echo "Lets go shopping!";
    } elseif ($gender === "x") {
        echo "you can choose between shopping and a soccer game!";
    } else {
        echo "please define your gender";
    }
}

?>

<hr>

<?php

$cijfer = 8.2;

if ($cijfer < 3)
    echo "Slecht";

elseif ($cijfer < 5.5){
    echo "Onvoldoende";
}
elseif ($cijfer < 7.5){
    echo "Voldoende";
}

elseif ($cijfer >7.5){
    echo "Goed";
}
?>

<hr>

<?php

echo date("w");
echo "<br>";
echo date("l");

?>

<hr>

<?php

$getal = rand(-10,50);

echo "Getal is $getal";
echo "<br>";

if ($getal >= 0 && $getal <10) {
    echo "Het getal ligt tussen de 0 en 10";
} elseif ($getal >=10 && $getal <20) {
    echo "Het getal ligt tussen de 10 en de 20";
} elseif ($getal >=20 && $getal <=30) {
    echo "Het getal ligt tussen de 20 en de 30";
} elseif ($getal <0){
    Echo "Het getal ligt onder de 0";
} elseif ($getal >30){
    echo "Het getal ligt boven de 30";
}
?>

<hr>

<?php


$kleur = "blauw";

switch ($kleur) {
    case "groen":
        $kleur = "Je favoriete kleur is groen";
        echo $kleur;
        break;
    case "blauw":
        $kleur = "Je favoriete kleur is blauw";
        echo $kleur;
        break;
    case "rood":
        $kleur = "Je favoriete kleur is rood";
        echo $kleur;
        break;
    case "zwart":
        $kleur = "dat is geen kleur a sahbi";
        echo $kleur;
        break;
    default:
        echo "Je hebt geen favoriete kleur";
}
?>

<hr>


<?php


