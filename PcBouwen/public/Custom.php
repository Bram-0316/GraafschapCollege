<?php
require_once "header.php";
require_once ('../src/databaseFunctions.php');
require_once ('../src/userFunctions.php');
$behuizingen = db_getData('SELECT * FROM `componenten` WHERE `Type` = "Behuizing"');
$CPUS = db_getData('SELECT * FROM `componenten` WHERE `Type` = "CPU"');
$psuS = db_getData('SELECT * FROM `componenten` WHERE `Type` = "PSU"');
$Coolingen = db_getData('SELECT * FROM `componenten` WHERE `Type` = "Cooling"');
$RAMS = db_getData('SELECT * FROM `componenten` WHERE `Type` = "RAM"');
$GPUS = db_getData('SELECT * FROM `componenten` WHERE `Type` = "GPU"');
$Moederborden = db_getData('SELECT * FROM `componenten` WHERE `Type` = "Motherboard"');



if ($_SESSION['loggedin'] === FALSE) {
    header("Location: inlog.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .select{ 
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

        select {
  width: 500px;
  font-size: 16px;
  display: block;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  box-sizing: border-box;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;
  /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
    for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
    
  */
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
  background-repeat: no-repeat, repeat;
  /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
  background-position: right .7em top 50%, 0 0;
  /* icon size, then gradient */
  background-size: .65em auto, 100%;
}
/* Hide arrow icon in IE browsers */
/* Hover style */
select:hover {
  border-color: #888;
}
/* Focus style */
select:focus {
  border-color: #aaa;
  /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
  box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
  box-shadow: 0 0 0 3px -moz-mac-focusring;
  color: #222; 
  outline: none;
}

.border{
    display: flex;
    align-items: center;
    justify-content: center;
    border: 5px solid lightgrey;
    box-shadow: 2px 5px 16px 0px #0B325E, 5px 5px 50px -30px rgba(193,194,188,0), 5px 5px 50px -30px rgba(193,194,188,0);
    width: 550px;
    height: 500px;
 padding-left:0px;
 position:sticky;
 left:500px;
 transform:translatex(177px) translatey(-41px);
}



.myButton {
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #bdbdbd 5%, #e9e9e9 100%);
	background-color:#bdbdbd;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 76px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:linear-gradient(to bottom, #e9e9e9 5%, #bdbdbd 100%);
	background-color:#e9e9e9;
}
.myButton:active {
	position:relative;
	top:1px;
}
    </style>
</head>
<body>
    <h1>Custom builds</h1>
    <div class="border">
    <div class="select">
        <form method="post" action="Thankyou.php"> 
        <select name="behuizing">
            <?php
                while($behuizing = $behuizingen->fetch_assoc()){
            ?>
                <option value="<?php echo $behuizing['Serie'] . " " .  $behuizing['Merk']; ?>"><?php echo $behuizing['Merk'] ." ". $behuizing['Serie']  ." ". $behuizing['Kleur'] ." - €". $behuizing['Prijs'];?></option>
            <?php } ?>
            
        </select>
            <br>
        <select name="cpu">
            <?php
                while($CPU = $CPUS->fetch_assoc()){
            ?>
                <option value="<?php echo $CPU['Serie'] . " " . $CPU['Merk']; ?>"><?php echo $CPU['Merk'] ." ". $CPU['Serie']  ." ". $CPU['Eigenschappen'] ." - €". $CPU['Prijs'];?></option>
            <?php } ?>
        </select>
        <br>
        <select name="psu">
            <?php
                while($psu = $psuS->fetch_assoc()){
            ?>
                <option value="<?php echo $psu['Serie'] . " " . $psu['Merk']; ?>"><?php echo $psu['Merk'] ." ". $psu['Serie']  ." ". $psu['Kleur'] ." - €". $psu['Prijs'];?></option>
            <?php } ?>
        </select>
        <br>
        <select name="cooling">
            <?php
                while($Cooling = $Coolingen->fetch_assoc()){
            ?>
                <option value="<?php echo $Cooling['Serie'] . " " . $Cooling['Merk']; ?>"><?php echo $Cooling['Merk'] ." ". $Cooling['Serie']   ." ".  $Cooling['Kleur'] ." ". $Cooling['Eigenschappen'] ." - €". $Cooling['Prijs'];?></option>
            <?php } ?>
        </select>
        <br>
        <select name="ram">
            <?php
                while($RAM = $RAMS->fetch_assoc()){
            ?>
                <option value="<?php echo $RAM['Serie'] . " " . $RAM['Merk'] . " " . $RAM['Eigenschappen']; ?>"><?php echo $RAM['Merk'] ." ". $RAM['Serie'] ." ". $RAM['Kleur']  ." ". $RAM['Eigenschappen'] ." - €". $RAM['Prijs'];?></option>
            <?php } ?>
        </select>
        <br>
        <select name="gpu">
            <?php
                while($GPU = $GPUS->fetch_assoc()){
            ?>
                <option value="<?php echo $GPU['Serie'] . " " . $GPU['Merk']; ?>"><?php echo $GPU['Merk'] ." ". $GPU['Serie']  ." ". $GPU['Eigenschappen'] ." - €". $GPU['Prijs'];?></option>
            <?php } ?>
        </select>
        <br>
        <select name="moederbord">
            <?php
                while($Moederbord = $Moederborden->fetch_assoc()){
            ?>
                <option value="<?php echo $Moederbord['Serie'] . " " . $Moederbord['Merk']; ?>"><?php echo $Moederbord['Merk'] ." ". $Moederbord['Serie']  ." ". $Moederbord['Eigenschappen'] ." - €". $Moederbord['Prijs'];?></option>
            <?php } ?> 
        </select>

                    <input name="submit" type="submit">   
                </form>

        <br>            
    </div>

    </div>
    <br>




</body>
</html>




<?php


if(isset($_POST['submit'])){
    $mailcontent = $_POST['cpu'] . ' | ' . $_POST['behuizing'] .  ' | ' . $_POST['gpu'] . ' | ' . $_POST['ram'] . ' | ' . $_POST['cooling'] .  ' | ' . $_POST['psu'] . ' | ' . $_POST['moederbord'];
    mail("Bramboudewijn2004@gmail.com", "Order", $mailcontent, "From: pcwinkel123@gmail.com");
}

require_once "footer.php";
?>


