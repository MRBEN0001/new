<?php
include_once("DatabaseConnection.php");

class Course extends DatabaseConnection
{
    //Add course
    public function checkCourseExist($course)
    {
        $sql = 'SELECT * FROM courses WHERE course_title=? ';
        $stmt = $this->connect()->prepare($sql);
        $course = $stmt->execute([$course]);
        if (!$course) {
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
    //admin add course
    public function save($course, $passMark)
    {
        $sql = 'INSERT INTO courses(course_title, passmark) VALUES(?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course, $passMark]);
        echo "Course Created";
    }


    //fetch Corses

    public function fetchCourses()
    {
        $sql = 'SELECT * FROM courses';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $course = $stmt->fetchAll();
        return $course;
    }
}

