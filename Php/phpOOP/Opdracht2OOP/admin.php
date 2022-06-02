<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form">
        <input type="number" name="getal1" placeholder="getal1">
        <input type="number" name="getal2" placeholder="getal2">
        <input type="submit" value="bereken">
    </form>
</body>
</html>


<?php
if (isset($_POST['getal1']) && isset($_POST['getal2'])) {
    echo bcpow($_POST['getal1'], $_POST['getal2'], 10) . "<br>";
    echo bcadd($_POST['getal1'], $_POST['getal2'], 10) . "<br>";
    echo bcsub($_POST['getal1'], $_POST['getal2'], 10) . "<br>";
    echo bcdiv($_POST['getal1'], $_POST['getal2'], 10) . "<br>";
}
?>