<?php
require_once "../include/db_connect.php";
$sql = "SELECT * FROM user";
$result = mysqli_query($db_conn, $sql);
if (mysqli_num_rows($result) === 0) {
    define('access', true);
    header("Location:../admin/register.php");}
?>
<!DOCTYPE html>

<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="icon" type="image/png" href="../images/icon.png">
</head>

<body>
	<form action="validatelogin.php" method="POST">
		<h2><u>Admin Login</u></h2>
		<?php if (isset($_GET['error'])) {?>
		<p class="error"><?php echo $_GET['error']; ?></p>
		<?php }?>
		<label>Username</label>
		<input type="text" name="uname" placeholder="Username"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
	</form>
	<div>
		<?php include '../include/footer.php';?>
	</div>
</body>

</html>