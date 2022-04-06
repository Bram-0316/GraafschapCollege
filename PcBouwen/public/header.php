<?php
require '../config/config.php';
require '../config/database.php';
    SESSION_START();
    if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] = true){
        echo "";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pc Bouwen</title>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH;?>/assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<!-- Start navigation -->
<nav>
    <div class="container">
        <div class="logo">
            <h3>PCWinkel.nl</h3>
        </div>
        <ul class="menu">
        
            <li><a href="<?php echo PUBLIC_PATH;?>/">Home</a></li>
            <li><a href="<?php echo PUBLIC_PATH;?>/Custom.php">Custom</a></li>
            <li><a id="login" href="<?php if ($_SESSION['loggedin'] === TRUE) {echo 'logout.php';}   elseif ($_SESSION['loggedin'] === FALSE) {echo 'inlog.php';} ?> "> <?php if ($_SESSION['loggedin'] === TRUE) {echo 'Log Out';}elseif ($_SESSION['loggedin'] === FALSE) {echo 'Log In';} ?></a></li>
            <li><a href="<?php echo PUBLIC_PATH;?>/registreren.php">Registreren</a></li>
        </ul>
    </div>
</nav>
<!-- End navigation -->
<!-- Start hero image -->
<section class="hero">
    <div class="content">
        <h1>PCWinkel.nl</h1>
        <p>De beste prijzen van heel NL en BE</p>
        <div class="btn-group">
        <a href="<?php echo PUBLIC_PATH;?>/registreren.php" class="btn-primary">Registreren</a>
            <a href="<?php echo PUBLIC_PATH;?>/Custom.php"" class="btn-secondary">Custom pc's</a>
        </div>
    </div>

</section> 

<!-- End hero image -->