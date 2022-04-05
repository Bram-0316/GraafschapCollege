<?php
require_once "header.php";
require_once ('../src/databaseFunctions.php');
require_once ('../src/userFunctions.php');
$behuizingen = db_getData('SELECT * FROM `componenten` WHERE `Type` = "Behuizing"');
$CPUS = db_getData('SELECT * FROM `componenten` WHERE `Type` = "CPU"');

session_start();

if ($_SESSION['loggedin'] === TRUE) {
    echo 'hoi ' . $_SESSION['name'];
}
elseif ($_SESSION['loggedin'] === FALSE) {
    echo 'log in eerst ';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Custom builds     </h1>

        <select name="ComponentSelect">
            <?php
                while($behuizing = $behuizingen->fetch_assoc()){
            ?>
                <option value=""><?php echo $behuizing['Merk'] ." ". $behuizing['Serie']  ." ". $behuizing['Kleur'] ." - €". $behuizing['Prijs'];?></option>
            <?php } ?>
        </select>
            <br>
        <select name="Select">
            <?php
                while($CPU = $CPUS->fetch_assoc()){
            ?>
                <option value=""><?php echo $CPU['Merk'] ." ". $CPU['Serie']  ." ". $CPU['Eigenschappen'] ." - €". $CPU['Prijs'];?></option>
            <?php } ?>
        </select>
        

</body>
</html>




<?php
require_once "footer.php";
?>


