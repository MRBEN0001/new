<?php
include_once("../includes/autoLoader.php");
include_once("../classes/User.php");

class UserProfileController extends User
{
    private $firstName;
    private $lastName;
    private $gender;
    private $phone;
    private $state;
    private $address;
    

    public function __construct($firstName, $lastName, $gender, $phone, $state, $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->state = $state;
        $this->address = $address;
    }

    public function handleProfileCreation()
    {
        if (empty($this->firstName) || empty($this->lastName) || empty($this->gender) || empty($this->phone) || empty($this->state) || empty($this->address)) {
            return "Fields cannot be empty";
        }

      
        // if ($this->checkProfileExist($this->firstName, $this->lastName, $this->gender, $this->phone, $this->state, $this->address)) {
        //     return "Username or Email Already Exist";
        // }
        $this->createProfile($this->firstName, $this->lastName, $this->gender, $this->phone, $this->state, $this->address );
        
    }
}
