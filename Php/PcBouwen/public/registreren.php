<?php
require_once 'header.php';
require_once('../src/userFunctions.php');

// check for user registration
$newUser = null;
if (isset($_POST['register'])){
    $newUser = registerUser($_POST['username'], $_POST['password'], $_POST['email']);

    header("Location: inlog.php");
}
?>
    <div class="page registreren">
        <div class="container">
            <h1>Registreren</h1>
            <!-- <?php if ($newUser === 1){?>
                <p>Nieuwe gebruiker succesvol toegevoegd</p>
            <?php }else{?> -->
           <form action="#" method="post">
               <div class="inputRow">
                   <label for="firstName">Username</label>
                   <input type="text" name="username" required>
               </div>
               <div class="inputRow">
                   <label for="email">Email</label>
                   <input type="email" name="email" required>
               </div>
               <div class="inputRow">
                   <label for="password">Wachtwoord</label>
                   <input type="password" name="password" required>
               </div>
               <div class="inputRow">
                   <input type="submit" name="register" value="Registreer" onclick="wps_registration_redirect();" >
               </div>
           </form>
            <?php } ?>
        </div>
    </div>
    <?php
    require_once 'footer.php';
    ?>
