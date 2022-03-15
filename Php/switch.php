<?php

$kleur = "groen";

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
        echo "Je hebt nog geen kleur gekozen";
}