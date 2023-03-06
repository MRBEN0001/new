<?php

// detect form submission

include_once("../classes/MarksController.php");
if (isset($_POST["submit"])) {
   
        //if submit button is clicked, get the names of the inputs
        $course = $_POST["course"];
        $student = $_POST["student"];
        $testScore = $_POST["testscore"];
        $examScore = $_POST["examscore"];
  
//send to controller
    $addMark = new MarkController();
    $addMark->saveMark($course, $student, $testScore, $examScore);
}




