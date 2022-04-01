<?php
require_once "databaseFunctions.php";

function registerUser($username, $password, $email){

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $result = db_insertData("INSERT INTO accounts (username, password, email) VALUES ('$username', '$hashed_password', '$email' )");


    return $hashed_password;
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