<?php

require_once ('header.php');


$mailcontent = $_POST['cpu'] . ' | ' . $_POST['behuizing'] .  ' | ' . $_POST['gpu'] . ' | ' . $_POST['ram'] . ' | ' . $_POST['cooling'] .  ' | ' . $_POST['psu'] . ' | ' . $_POST['moederbord'];
mail("Bramboudewijn2004@gmail.com", "Order", $mailcontent, "From: pcwinkel123@gmail.com");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #terug{
            text-decoration: none;
            color: black;
        }
        #terug:hover{
            text-decoration: underline;
            color: blue;
        }
        .message{
            transform:translatex(736px) translatey(0px);
            Width: 650px
        }   

    </style>


</head>
<body>
<div class="page">
    <div class="message">
    <h1>Bedankt voor je aankoop!</h1>
    <h3>We zullen zo snel mogelijk aan de slag gaan met jouw custom pc!</h3>
    <p>Klik <a id="terug" href="<?php echo PUBLIC_PATH;?>/index.php">hier</a> om terug te gaan naar de hoofdpagina</p>
</div>
</div>
</body>
</html>



<?php

require_once ('footer.php');

?>