<?php
include_once("autoLoader.php");
include_once("../classes/SignInController.php");
if (isset($_POST["submit"])) {
    //if submit button is clicked, get the names of the inputs
    // $userName = $_POST["username"];
    $eMail = $_POST["email"];
    $password = $_POST["password"];

    $signInController = new SignInController($eMail, $password);
    echo $signInController->handleLogInSubmission();
    
}
