<?php
// include_once("../includes/autoLoader.php");
include_once("../classes/UserCreateProfileController.php");
if (isset($_POST["submit"])) {
    //if submit button is clicked, get the names of the inputs
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $address = $_POST["address"];

    $signUpController = new UserProfileController($firstName, $lastName, $gender,$phone, $state, $address );
    echo $signUpController->handleProfileCreation();
}
