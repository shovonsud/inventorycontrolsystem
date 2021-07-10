<?php
require_once "admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="bodystart" style="background-color:#ecf0f1;">
        <h1><i>Dashboard</i></h1><br><br>
        <div class="box">
            <?php
$result = mysqli_query($db_conn, "SELECT COUNT(id) AS totalcat from category");
$data = mysqli_fetch_assoc($result);
echo "<label>Categories: " . $data['totalcat'] . "</label>";
?>
        </div>
        <div class="box">
            <?php
$result = mysqli_query($db_conn, "SELECT COUNT(item_id) AS totalit from product");
$data = mysqli_fetch_assoc($result);
echo "<label>Items: " . $data['totalit'] . "</label>";
?>
        </div>
        <div class="box">
            <?php
$result = mysqli_query($db_conn, "SELECT SUM(quantity) AS totalq from product");
$data = mysqli_fetch_assoc($result);
echo "<label>Stock Quantity: " . $data['totalq'] . "</label>";
?>
        </div>
    </div>
</body>

</html>
<?php include '../include/footer.php';?>