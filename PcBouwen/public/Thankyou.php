<?php

require_once ('header.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            text-decoration: underline;
            color: blue;
        }
        .page{
 transform:translatex(736px) translatey(0px);
}

    </style>


</head>
<body>
<div class="page">
    <h1>Bedankt voor je aankoop!</h1>
    <h3>We zullen zo snel mogelijk aan de slag gaan met jouw custom pc!</h3>
    <p>Klik <a href="<?php echo PUBLIC_PATH;?>/index.php">hier</a> om terug te gaan naar de hoofdpagina</p>
</div>
</body>
</html>



<?php

require_once ('footer.php');

?>