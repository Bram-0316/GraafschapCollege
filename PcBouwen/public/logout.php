<?php 
    SESSION_START();
$_SESSION['loggedin'] = FALSE;
$_SESSION['name'] = null;
$_SESSION['id'] = null;
header("Location: index.php");
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
 
</body>
</html>


<?php 
