<?php
include_once("../includes/autoLoader.php");
include_once("../classes/User.php");
class SignUpController extends User
{
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($username, $email, $password, $role)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role= $role;
    }

    public function handleFormSubmission()
    {
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->role)) {
            return "Fields cannot be empty";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid Email Address";
        }
        if (strlen($this->password) < 7) {
            return "Password cannot be less than 7 characters";
        }
        if ($this->checkUserExist($this->username, $this->email)) {
            return "Username or Email Already Exist";
        }
        $this->createUser($this->username, $this->email, $this->password, $this->role);
    }
}
