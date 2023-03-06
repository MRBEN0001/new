<nav>
    <a href="createUser.php">Create New User</a>
    <a href="teachers.php">View Teachers</a>
    <a href="students.php">View All Students</a>
    <a href="#">View Result</a>
    <a href="addCourse.php">Add Course</a>

    <select name="" id="" onchange="location = this.value;">
    
        <option value="">View Marks</option>
        <?php
        include("../../classes/CourseController.php");
        $allCourses = new CourseController();
        foreach ($allCourses->getAllCourses() as $course) {
        ?>
       <option value="viewMarks.php? course=<?php echo $course['course_title'] ?> " > <?php echo $course['course_title'] ?>  </option></a>
        <?php
        }
        ?>
       
    </select>

</nav>

