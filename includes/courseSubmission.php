<?php
include_once("../classes/CourseController.php");
if (isset($_POST["submit"])) {
    if (isset($_POST["submit"])) {
        //if submit button is clicked, get the names of the inputs
        $course = $_POST["course"];
        $passMark = $_POST["passmark"]; 
    }

    $newCourse = new CourseController();
    $newCourse->saveCourse($course, $passMark);
}

