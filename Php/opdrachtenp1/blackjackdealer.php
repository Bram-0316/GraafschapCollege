<?php

//Variables
$dealerscore = rand(2, 21);
$derdekaart = rand(2, 11);
$dealerscore2 = $dealerscore + $derdekaart;

if ($dealerscore == 21) {
    echo "The dealer has BLACKJACK!";
} elseif ($dealerscore < 21) {
    echo "The dealer has: " . $dealerscore;

}
echo "<br>";
if ($dealerscore <= 17) {
    echo "The dealer has: " . $dealerscore2;
    if ($dealerscore2 > 21) {
        echo "<br>";
        echo "The dealer is bust!";
    }
}