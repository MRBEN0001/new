<!DOCTYPE html>
<html>

<head>
	<!-- <title>School Management System Admin Dashboard</title> -->
	<title>Admin Create User</title>
	<link rel="stylesheet" href="../css/adminDashboardCreateUserStyle.css">
</head>

<body>
	<header>
		<h1>School Management System Admin Dashboard</h1>
	</header>
	<?php
include_once("header.php");
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





		<!-- partial:index.partial.html -->
		<!-- <!DOCTYPE html>
    <html>

    <head>
        <title>Slide Navbar</title>
        <link rel="stylesheet" type="text/css" href="slide navbar style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    </head>

    <body> -->
		<div class="mainWrapper">
			<div class="main">
				<input type="checkbox" id="chk" aria-hidden="true">

				<div class="signup">
					<form action="../../includes/signUp.php" method="post">
						<label for="chk" aria-hidden="true">Create User</label>
						<input type="text" name="username" placeholder="User name">
						<input type="email" name="email" placeholder="Email">
						<input type="password" name="password" placeholder="Password">


						<div class="radioButtons ">

							<input type="radio" name="role" value="admin" class="radio"><span class="radio1 radio radioTag radioTag1">Admin</span>
							<input type="radio" name="role" value="teacher" class="radio"><span class="radio2 radio radioTag radioTag2">Teacher</span>
							<input type="radio" name="role" value="student" class="radio"><span class="radio3 radio radioTag radioTag3">Student</span>

						</div>
						<button class="submit" name="submit">Submit</button>

					</form>
				</div>
			</div>
		</div>



</html>
<!-- partial -->

</body>

</html>