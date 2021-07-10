<?php
require_once "admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Users ||Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <div class="bodystart">
        <h1><i>Users</i></h1>
        <button class="addcategory" name="submit" type="button" onclick="window.location.href='register.php'">Add
            User</button>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email-ID</th>
                <th>Phone No.</th>
            </tr>
            <?php
$sql = "SELECT * FROM user";
$result = $db_conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . " " . $row["last_name"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email_id"] . "</td><td>" . $row["phone"] . "</td></tr>";
    }
    echo "</table>";
} else {echo "0 results";}
$db_conn->close();
?>
        </table>
    </div>
</body>

</html>
<?php
require_once "../include/footer.php";?>

</html>