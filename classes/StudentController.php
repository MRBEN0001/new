<?php
include_once("User.php");
class StudentController extends User
{

    public function getAllStudents()
    {
        $allStudents = $this->fetchStudents();
        return $allStudents;
    }

   
}
