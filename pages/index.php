<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - Sign up / Login Form</title>
	<link rel="stylesheet" href="css/indexPageStyle.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<!DOCTYPE html>
	<html>

	<head>
		<title>Slide Navbar</title>
		<link rel="stylesheet" type="text/css" href="slide navbar style.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	</head>

	<body>
		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup" hidden>
				<form action="../includes/signUp.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<button name="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="../includes/signIn.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<button name="submit">Login</button>
				</form>
			</div>
		</div>
	</body>

	</html>
	<!-- partial -->

</body>

</html>