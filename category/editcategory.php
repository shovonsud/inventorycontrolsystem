<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Edit Category</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Edit Category</i></h1>
        <form method="POST" action="#">
            <label>Select Category</label>
            <?php
$sql = "SELECT * FROM category";
$result = mysqli_query($db_conn, $sql);
echo "<select name='catset' required>";
echo "<option value=''>Select</option>";
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";
?>
            <button class="submitnewcat" name="submit3" type="submit" value="Submit">Fetch Details</button>
        </form>
        <?php
if (isset($_POST["submit3"]) == true) {
    $x = (int) $_POST['catset'];
    $sql = "SELECT * FROM category a WHERE a.id=$x";
    $result = $db_conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<form method='POST' action='updatecategory.php' style='padding-top:30px;'";
        echo "<input type='hidden' readonly>";
        echo "<label>Category ID</label>";
        echo "<input type='number' name='catid' value=$x readonly style='cursor:no-drop;'><br><br>";
        echo "<label>New Category Name</label>";
        echo "<input type='text' name='newcatname' required value='" . $row['name'] . "' placeholder='" . $row['name'] . "'><br><br>";
        echo "<label>Status</label>";
        echo "<select name='newstat' required>";
        if ($row["status"] == 1) {
            $catstat = "Active";

            echo "<option value='" . $row['status'] . "' selected>$catstat</option>";
            echo "<option value='2'>Disabled</option>";
        } else {
            $catstat = "Disabled";
            echo "<option value='1'>Active</option>";
            echo "<option value='" . $row['status'] . "' selected>$catstat</option>";
        }
        echo "</select><br>";
        echo "<button class='submitnewcat' name='submit4' type='submit' value='Submit'>Update</button>";
        echo "</form>";
    }

}?>
    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>