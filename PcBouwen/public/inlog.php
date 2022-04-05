    <?php
        require_once ('header.php');
		require_once ('../src/userFunctions.php');
		require_once ('../src/databaseFunctions.php');
        session_start();
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #username, #password{
            padding: 10px;
            margin: 5px;
            width: 300px;
        }
        .submit{
            width: 325px;
            padding: 10px;
            margin: 5px;
        }
        .Login{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .doei{
        }
        .hoi{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="doei">
			<h1 class="hoi">Login</h1>
			<form class="Login" action="#" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required> 
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required> 
                <label for="submit">
					<i class="fas fa-user"></i>
				</label>
				<input  class="submit" type="submit" value="Login">
			</form>
		</div>
</body>
</html>


    <?php
			$DATABASE_HOST = 'localhost';
			$DATABASE_USER = 'root';
			$DATABASE_PASS = '';
			$DATABASE_NAME = 'pcbouwen';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$username = "";


if(isset($_POST["username"])){
    $username = $_POST['username'];
}

// if ( !isset($_POST['username'], $_POST['password']) ) {
// 	// Could not get the data that should have been sent.
// 	exit('Please fill both the username and password fields!');
// }
if ($stmt = $con->prepare("SELECT id, password FROM accounts WHERE username = '" . $username . "'")) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	// $stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

		// $hashed = $con->query("SELECT password FROM `accounts` WHERE `username` = '" . $username . "'");
		$hashed_password = current($con->query("SELECT password FROM `accounts` WHERE `username` = '" . $username . "'")->fetch_assoc());
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'] , $hashed_password)) { 
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
        }
    } elseif (isset($_POST['username'], $_POST['password'])){
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }

	$stmt->close();
}



        require_once ('footer.php');
    ?> 