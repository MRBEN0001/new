<?php

// include_once("../includes/autoLoader.php");
include_once("../classes/User.php");
class SignInController extends User
{
    
    private $email;
    private $password;

    public function __construct( $email, $password)
    {
       
        $this->email = $email;
        $this->password = $password;
    }

    public function handleLogInSubmission()
    {
        if ( empty($this->email) || empty($this->password)) {
            return "Fields cannot be empty";
        }

        // if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        //     return "Invalid Email Address";
        // }
        // if (strlen($this->password) < 7) {
        //     return "Password cannot be less than 7 characters";
        // }
        if (!$this->checkUserExistToLogin( $this->email, $this->password)) {
            return "User doesnt exist, recheck your inputs";
        }
        $this->LoginUser( $this->email, $this->password);
    }
}
