<?php

function Korting($oudBedrag = "" , $nieuwBedrag = "" ) {
    $bedrag1 = $oudBedrag - $nieuwBedrag;
    $bedrag2 = $bedrag1/100;
    $bedrag3 = $bedrag1/$bedrag2;
    return $bedrag3;
}
echo Korting(230,170);
echo "bram is homo"
?>
