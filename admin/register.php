<?php
session_start();
if (isset($_SESSION['logged_in'])) {
    require_once "admin_panel.php";
}

if (!defined('access')) {
    die();
}

?>
<!DOCTYPE html>

<head>
	<title>Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="icon" type="image/png" href="../images/icon.png">
</head>

<body class="bdy">

	<div class="bodystart">
		<h1 id="h1d">User Registration</h1>
		<form id="rform" action="registration.php" method="POST">
			<h2><u>Registration Form</u></h2>
			<?php if (isset($_GET['error'])) {?>
			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php }?>

			<label class="deny">Firstname</label>
			<input class="deny" type="text" required name="fname" placeholder="Firstname"><br>


			<label class="deny">Lastname</label>
			<input class="deny" type="text" required name="lname" placeholder="Lastname"><br>


			<label class="deny">Email ID</label>
			<input class="deny" type="text" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$"
				placeholder="Email-ID"><br>

			<label class="deny">Phone</label>
			<input class="deny" type="text" required name="phn" minlength="10" maxlength="10" size="10" pattern="\d{10}"
				placeholder="Phone Number"><br>

			<label class="deny">Username</label>
			<input class="deny" type="text" name="uname" placeholder="Username"><br>

			<label class="deny">Password</label>
			<input class="deny" type="password" name="password" placeholder="Password"><br>

			<label class="deny">Confirm Password</label>
			<input class="deny" type="password" name="cpass" placeholder="Password"><br>

			<button id="su" name="submit" type="submit">Register</button>
		</form>
		<div>
			<?php include '../include/footer.php';?>
		</div>
	</div>
</body>

</html>