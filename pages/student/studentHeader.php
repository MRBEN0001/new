
<nav>
<a href="userCreateProfile.php">Create Profile</a>
<a href="#">View Profile</a>
<a href="viewResult.php">View Result</a>
<?php
    include("../../classes/CourseController.php");


?>
<select name="" id="" onchange="location = this.value;">
    
    <option value="">View Result</option>
    <?php
    $allCourses = new CourseController();
    print_r($allCourses);
    foreach ($allCourses->getAllCourses() as $course) {
    ?>
   <option value="viewResult.php? course=<?php echo $course['course_title'] ?> " > <?php echo $course['course_title'] ?>  </option>
    <?php
    }
    ?>
   
</select>
</nav>

