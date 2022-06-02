<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'gc_festival');

// initialize variables
$firstName = "";
$lastName = "";
$email = "";
$password = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin = 0;

    $db->query("INSERT INTO `users`(`id`, `firstName`, `lastName`, `email`, `password`) VALUES ('', '$firstName', '$lastName', '$email', '$password')");
    $_SESSION['message'] = "User saved";


    header('location: index.php');
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db->query("update users set firstName='$firstName', lastName='$lastName', email='$email', password='$password' where id=$id");

    $_SESSION['message'] = "User updated!";
    header('location: index.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $db->query("DELETE FROM `users` WHERE `id` = '$id'");

    $_SESSION['message'] = "User deleted!";
    header('location: index.php');
}


//    $mailcontent = "Hallo,\nEr is een nieuwe gebruiker toegevoegt.";
    // mail("Bramboudewijn2004@gmail.com", "Order", $mailcontent, "From: pcwinkel123@gmail.com");