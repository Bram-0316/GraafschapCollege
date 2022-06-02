<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'registratiemevrouw');

// initialize variables
$firstName = "";
$lastName = "";
$email = "";
$password = "";
$id = 0;
$update = false;
$opdracht = "";

if (isset($_POST['save'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

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

if (isset($_GET['TicketSave'])) {
    $opdracht = $_GET['OpdrachtSave'];

    $db->query("INSERT INTO `tickets` (firstName, lastName, tickets) VALUES ('$firstName', '$lastName', '$opdracht')");
}