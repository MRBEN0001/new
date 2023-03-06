<!DOCTYPE html>
<html>

<head>
	<title>School Management System Admin Dashboard</title>
	<link rel="stylesheet" href="../css/adminDashboard.css">
</head>

<body>
	<header>
		<h1>School Management System Admin Dashboard</h1>
	</header>
	<nav>
		<?php
		include_once("header.php");
		include("../../classes/MarkController.php");

		//get course name
		$course = $_GET["course"];

		//instanciate MarkController Class
		$marks = new MarkController();

		//call the fetchMarks method in the MarkController
		$marksRelatedToCourse = $marks->fetchMarks($course);

		?>


	</nav>
	<main>
		<section id="users">
			<h2>Result</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Course</th>
						<th>Student</th>
						<th>Test Score</th>
						<th>Exam Score</th>
						<th>Total Score</th>
					</tr>
				</thead>
				<tbody>

					<?php

					foreach ($marksRelatedToCourse as $mark) {
						$totalScore =  $mark['test_score'] + $mark["exam_score"];
						// print_r($totalScore) ;
					?>
						<tr>
							<td> <?php echo $mark['id']; ?></td>

							<td><?php echo $mark['course']; ?></td>
							<td><?php echo $mark['student']; ?></td>
							<td><?php echo $mark['test_score']; ?></td>
							<td><?php echo $mark['exam_score']; ?></td>
							<td>
								<?php echo $totalScore; ?>
								<!-- <button>Edit</button>
							<button>Delete</button> -->
							</td>
						</tr>
					<?php
					}
					?>


				</tbody>
			</table>
		</section>