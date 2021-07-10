<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Category</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Categories</i></h1>
        <div class="buton">
            <button class="addcategory" type="button" onclick="window.location.href='editcategory.php'">Edit
                Category</button><br><br><br>
            <button class="addcategory" type="button" onclick="window.location.href='add_category.php'">Add
                Category</button>
        </div>
        <table>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Status</th>
            </tr>
            <?php
$sql = "SELECT * FROM category";
$result = $db_conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["status"] == 1) {
            $catstat = "Active";
        } else {
            $catstat = "Disabled";
        }
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $catstat . "</td></tr>";
    }
    echo "</table>";
} else {echo "0 results";}
$db_conn->close();
?>
        </table>

    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>