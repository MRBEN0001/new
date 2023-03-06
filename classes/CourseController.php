<?php
include_once("Course.php");
class CourseController extends Course
{

    public function getAllCourses()
    {
        $allCourses = $this->fetchCourses();
        return $allCourses;
    }

    public function saveCourse($course, $passMark)
    {

        if (empty($course) || empty($passMark)) {
            return "Fields cannot be empty";
        }

        if ($this->checkCourseExist($course)) {
            return "Course already existed";
        }
        $this->save($course, $passMark);
    }
}
