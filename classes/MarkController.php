<?php

include_once("Mark.php");

class MarkController extends Mark{

    public function getMarks($course)
    {
        $marks = $this->fetchMarks($course);
        return $marks;
    }


    public function saveMark($course, $student, $testScore, $examScore){
 //validate mark submission
        // if (empty($course) || empty($passMark)) {
        //     return "Fields cannot be empty";
        // }

        // if ($this->checkCourseExist($course)) {
        //     return "Course already existed";
        // }
         //save mark
        $this->save($course, $student, $testScore, $examScore);
       
    }
}