<?php
    date_default_timezone_set("europe/amsterdam");

    $today = date("j F Y");
    echo "vandaag is het: $today";

    echo "<br>";
    
    $time = date("H:i:s");
    echo "het is nu: $time uur";

    echo "<br>";

    $month = date("F");
    $daysinmonth = date("t");
    echo "deze maand, $month heeft $daysinmonth dagen";

    echo "<br>";

    $week = date("W");
    echo "deze week is het: $week"


?>