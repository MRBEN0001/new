<!DOCTYPE html>
<html>

<head>
	<title>School Management System Admin Dashboard</title>
    <link rel="stylesheet" href="../css/teacherAddCourse.css">
</head>

<body>
	<header>
		<h1>School Management System Teacher Dashboard</h1>
	</header>

  <?php
include_once("header.php")
?>

    <form action="../../includes/markSubmission.php" method="post">
  <fieldset>
    <legend>Add Mark</legend>
    <!-- <label for="course">Course Name:</label> -->
   
    <?php 
include("../../classes/CourseController.php");
include("../../classes/StudentController.php");
?>
    <select name="course">
   <option>Select Course</option>
  <?php 
  $allCourses = new CourseController();
  foreach ($allCourses->getAllCourses() as $course) {
  
  ?>
    <option><?php echo $course['course_title'] ?> </option>
    <?php 
    }
   ?>
</select>


<select name="student">
   <option>Select Student</option>
  <?php 
  $allStudents = new StudentController();
 
  
  foreach ($allStudents->fetchStudents() as $student) {
  
  ?>
    <option><?php echo $student['user_name'] ?> </option>
    <?php 
    }
   ?>
</select>

    <!-- <select name="student" id="">
    <option value="">Select Student</option>
    </select> -->
    <input type="number" id="course" placeholder=" Test Score" name="testscore" required>
    <input type="number" id="" placeholder=" Exam Score " name="examscore" required>
    <button name="submit" type="submit">Submit</button>
  </fieldset>
</form>




</body>
	