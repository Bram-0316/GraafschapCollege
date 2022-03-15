<?php

$db= new PDO ("mysql:host=localhost;dbname=negers", "root", "");


    if(isset($_POST['verzenden']))  {
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $bericht = $_POST['bericht'];

        echo "Het Formulier is verzonden!<br>";
        echo "Naam: " . $naam . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Bericht: " . $bericht . "<br>";
    }   else {
        $naam = "";
        $email = "";
        $bericht = "loop naar de kloten gek";
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mooi</title>
</head>
<body>
    <form action="" method="post">
        <label>Naam</label>
        <input type="text" name="naam">
        <br>
        <label>email</label>
        <input type="email" name="email">
        <br>
        <label>bericht</label>
        <input type="text" name="bericht">
        <br>
        <input type="submit" value="Verzenden" name="verzenden">
    </form>
</body>
</html>

