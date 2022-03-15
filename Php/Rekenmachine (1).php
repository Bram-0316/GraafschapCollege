<?php

// Variable declaration
$uitkomst = "Vul een berekening in";
$getal1 = (double) $_GET["numberOne"];
$getal2 = (double) $_GET["numberTwo"];
$operator =  $_GET["dropdown"];


if ($operator === "*") {
     $uitkomst = $getal1 * $getal2;

} elseif ($operator === "+") {
     $uitkomst = $getal1 + $getal2;

} elseif ($operator === "/") {
     $uitkomst = $getal1 / $getal2;

} elseif ($operator === "-") {
    $uitkomst = $getal1 - $getal2;

} else {
    echo "Je hebt nog geen operator gekozen";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Rekenmachine</title>
</head>
<body>
<!-- Form styling -->
<style>
    .form-control{
        width: 20vw;
        float: left;
    }

</style>

<div class="container-fluid">
    <h1>Rekenmachine</h1>
    <form action="#" method="GET">
        <input method="GET" type="text" name="numberOne" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Vul hier het eerste nummer in." required>
        <input method="GET" type="text" name="numberTwo" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Vul hier het tweede nummer in." required>
        <select name="dropdown" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split">
            <option value="*">*</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
        </select>
        <input type="submit" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split">
    </form>
    <hr>
    <input class="form-control" type="text" id="antwoord" placeholder="Antwoord" value="<?php echo $uitkomst; ?>" readonly>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>