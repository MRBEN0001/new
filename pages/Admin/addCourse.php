<!DOCTYPE html>
<html>

<head>
	<title>School Management System Admin Dashboard</title>
    <link rel="stylesheet" href="../css/adminCreateCourse.css">
</head>

<body>
	<header>
		<h1>School Management System Admin Dashboard</h1>
	</header>
	<nav>
<?php
include_once("header.php");
?>
</nav>
    <form action="../../includes/courseSubmission.php" method="post">
	
  <fieldset>
    <legend>Add Course</legend>
    <!-- <label for="course">Course Name:</label> -->
    <input type="text" id="course" placeholder=" course" name="course" required>
    <input type="text" id="" placeholder=" Course pass mark " name="passmark" required>
    <button name="submit" type="submit">Submit</button>
  </fieldset>
</form>


</body>
	