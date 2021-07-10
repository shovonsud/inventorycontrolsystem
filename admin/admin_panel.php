<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "../include/db_connect.php";
define('access', true);
if (isset($_SESSION['logged_in'])) {

    ?>
<!DOCTYPE html>

<head>
  <!--<title>Admin Control Dashboard</title>-->
  <link rel="stylesheet" href="../css/adminpanel.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="icon" type="image/png" href="../images/icon.png">
</head>

<body class="adminpanelbody">
  <header>
    <h3 class="projecttitle text-center">Inventory Control System</h3>
    <div class="text-center">
      <h3 class="hellouser">Welcome<?php echo "<br>" . $_SESSION['name']; ?></h3>
      <button class="logout" id="logot" type="button"
        onclick="window.location.href='../include/logout.php'">Logout</button>
    </div>
  </header>

  <ul>
    <li><a class="pa" href="../admin/">Dashboard</a></li>
    <li><a class="pa" href="../admin/users.php">Users</a></li>
    <li><a class="pa" href="../category/">Category</a></li>
    <li><a class="pa" href="../item/">Items</a></li>
    <li><a class="pa" href="../sale/order.php">Customer(Billing)</a></li>
    <li><a class="pa" href="../sale/orderrec.php">Order Records</a></li>
  </ul>
</body>

</html>
<?php
} else {
    header("Location: admin_login.php");
}

?>