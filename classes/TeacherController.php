<?php
include_once("User.php");
class TeacherController extends User
{

    public function getTeachers()
    {
        $teachers = $this->fetchTeachers();
        return $teachers;
    }

}