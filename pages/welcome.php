<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
	<title>School Management System Admin System</title>
	<link rel="stylesheet" href="css/userWelcome.css">
</head>

<body>
	<header>
		<h1>School Management System Student System </h1>
	</header>
	<?php
	include("student/studentHeader.php")
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
    echo"Welcome ". $_SESSION['email']." do well to create your profile ";
    // echo $_SESSION['auth_id'];
    ?>



   

</body>

</html>