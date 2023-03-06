<?php
// include_once("../includes/autoLoader.php");
include_once("DatabaseConnection.php");
class User extends DatabaseConnection
{
    //sign Up

    public function checkUserExist($userName, $eMail)
    {
        $sql = 'SELECT * FROM users WHERE user_name=? || e_mail=?';
        $stmt = $this->connect()->prepare($sql);
        $user = $stmt->execute([$userName, $eMail]);
        if (!$user) {
            $stmt = null;
            echo "Statement Not Executed";
            exit();
        }

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function createUser($userName, $eMail, $password, $role)
    {
        $sql = 'INSERT INTO users(user_name, e_mail,password,role) VALUES(?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userName, $eMail, $password,$role]);
        echo "User Created";
    }

    //Log In 
    public function checkUserExistToLogin($eMail, $password)
    {
        $sql = 'SELECT * FROM users WHERE e_mail=? AND password=?';
        $stmt = $this->connect()->prepare($sql);
        $user = $stmt->execute([$eMail, $password]);
        if (!$user) {
            $stmt = null;
            echo "Statement Not Executed";
            exit();
        }

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function LoginUser($eMail, $password)
    {
        $sql = 'SELECT * FROM users WHERE e_mail=? AND password=?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$eMail, $password]);
        $user = $stmt->fetch();
        session_start();
        $_SESSION['auth_id'] = $user['id'];
        $_SESSION['email'] = $user['e_mail'];

        if ($user["role"]=="admin") {

            echo header("Location:../pages/admin/dashBoard2.php");

        }
        elseif ($user["role"]=="teacher"){
            echo header("Location:../pages/teacher/teacherWelcome.php");

        }else {
            echo header("Location:../pages/welcome.php");

        }
    }

//Creat Profile
public function createProfile($firstName, $lastName, $gender, $phone, $state, $address)
    {
        $sql = 'INSERT INTO user_profile(first_name, last_name,gender, mobile_number, state_of_origin, residential_address) 
            VALUES(?,?,?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $gender, $phone, $state, $address]);
        echo "Profile Created";
        echo header("Location:../pages/welcome.php");
    }

    
    //fetch students

    public function fetchstudents()
    {
        $sql = 'SELECT * FROM users WHERE role = "student"';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $students = $stmt->fetchAll();
        return $students;
    }

  //fetch Teachers
  public function fetchTeachers()
  {
      $sql = 'SELECT * FROM users WHERE role = "teacher"';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $teachers = $stmt->fetchAll();
      return $teachers;
  }

    
}