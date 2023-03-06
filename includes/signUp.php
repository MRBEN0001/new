<?php
include_once("autoLoader.php");
include_once("../classes/SignUpController.php");
if (isset($_POST["submit"])) {
    //if submit button is clicked, get the names of the inputs
    $userName = $_POST["username"];
    $eMail = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $signUpController = new SignUpController($userName, $eMail, $password,$role );
    echo $signUpController->handleFormSubmission();
}
