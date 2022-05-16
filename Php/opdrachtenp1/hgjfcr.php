<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="#">
    <label>Merk</label>
    <input type="text" name="merk"><br>

    <label>Type</label>
    <input type="text" name="type"><br>

    <label>Prijs</label>
    <input type="text" name="prijs"><br>
    <input type="submit" name="verzenden" value="Opslaan">
</form>
</body>
</html>
<?php
try
{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");

    if(isset($_POST['verzenden']))
    {
        $merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
        $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
        $prijs = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $query = $db->prepare("INSERT INTO fietsen(merk, type, prijs) VALUES(:merk, :type, :prijs)");

        $query->bindParam("merk", $merk);
        $query->bindParam("type", $type);
        $query->bindParam("prijs", $prijs);

        if($query->execute())
        {
            echo "De nieuwe gegevens zijn succesvol toegevoegd.";
        }
        else
        {
            echo "Er is een fout opgetreden.";
        }
        echo "<br>";

    }
}
catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>