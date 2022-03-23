<?php
require_once "databaseFunctions.php";

function registerUser($username, $password, $email){
    $result = db_insertData("INSERT INTO accounts (username, password, email) VALUES ('$username', '$password', '$email' )");
    return $result;
}
function getUser($email, $password){
    $result = db_getData("SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'");
    if ($result->num_rows > 0){
        //user found, return user data
        return $result;
    }else {
        return "No user found";
    }
}
?>