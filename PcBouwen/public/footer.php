    <!--  Start footer -->
    <footer>
        <div class="container">
            <div class="column column1">
                <h3>Contact</h3>
                <p>Adres: Overal en nergens</p>
                <p>Telefoon: 06-12345678</p>
                <p>Email: Bram.boudewijn@student.graafschapcollege.nl</p>
            </div>
            <div class="column column2">
                <h3>Links</h3>
                <ul class="footerMenu">
                    <li><a href="<?php echo PUBLIC_PATH;?>/">Home</a></li>
                    <li><a href="<?php echo PUBLIC_PATH;?>/Custom.php">Custom Builds</a></li>
                    <li><a href="
<?php if ($_SESSION['loggedin'] === TRUE) {
    echo 'logout.php';
}   elseif ($_SESSION['loggedin'] === FALSE) {
    echo 'inlog.php';
} ?> ">


<?php if ($_SESSION['loggedin'] === TRUE) {
    echo 'Log Out';
}
elseif ($_SESSION['loggedin'] === FALSE) {
   echo 'Log In';
} ?>

</a></li>
                    <li><a href="<?php echo PUBLIC_PATH;?>/registreren.php">Registreren</a></li>
                </ul>
            </div>
        </div>

    </footer>
    <!--  End footer -->
    </body>
</html>