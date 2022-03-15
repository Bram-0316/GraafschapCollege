<?php

require_once ('header.php');



//create connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//check connection
if($mysqli->connect_error){
    die("Connection failed; " .$mysqli->connect_error);

}
echo "Connected successfully";

$lineup=$mysqli->query("SELECT*FROM lineup");

?>





    <div class="page lineup">
        <div class="container">
            <h1>Line-up</h1>
            <div class="artists">
            
            <?php
                if($lineup->num_rows > 0){
                    while($artist = $lineup->fetch_assoc()){
                        $artistImages = IMAGE_FOLDER . "/" . $artist['artistImage'];
                        echo "<div class='artist'> <img src=" . $artistImages . "><h2> $artist[artistName]</h2></div>";
                    }
                }
            ?>
            
                
            </div>
        </div>
    </div>




<?php

require_once ('footer.php');

?>