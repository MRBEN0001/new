<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
	<title>School Management System Teacher Dashboard</title>
	<link rel="stylesheet" href="../css/teacherWelcome.css">
</head>

<body>
	<header>
		<h1>School Management System Teacher Dashboard </h1>
	</header>
	<?php
include_once("header.php")
?>

	<main>
		<section id="users">
			<!-- <h2>Users</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Type</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>John Doe</td>
						<td>john@gmaiil.com</td>
						<td>Admin</td>
						<td>
							<button>Edit</button>
							<button>Delete</button>
						</td>
					</tr>

				</tbody>
			</table> -->
		</section>




    <?php
    echo"Welcome ". $_SESSION['email'];
    // echo $_SESSION['auth_id'];
    ?>



   

</body>

</html>