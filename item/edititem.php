<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Edit Item</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Edit Item</i></h1>
        <div style="padding-bottom:5px; border-bottom:5px solid black">
            <form method="POST" action="#" style="border-bottom:1px">
                <label>Select Item</label>
                <?php
$sql = "SELECT * FROM product";
$result = mysqli_query($db_conn, $sql);
echo "<select name='itemset' required>";
echo "<option value=''>Select</option>";
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['item_id'] . "'>" . $row['item_name'] . "</option>";
}
echo "</select>";
?>
                <button class="submitnewcat" name="submit3" type="submit" value="Submit">Fetch Details</button>
            </form>
        </div>
        <?php
if (isset($_POST["submit3"]) == true) {
    $x = (int) $_POST['itemset'];
    $sql = "SELECT * FROM product a WHERE a.item_id=$x";
    $result = $db_conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<form method='POST' action='updateitem.php' style='padding-top:15px;'";
        echo "<input type='hidden' readonly>";
        echo "<label>Item ID</label>";
        echo "<input type='number' name='itemid' value=$x readonly style='cursor:no-drop;'><br><br>";
        echo "<label>New Item Name</label>";
        echo "<input type='text' name='newitname' value='$row[item_name]' required placeholder='" . $row['item_name'] . "'>";
        echo "<br><br><label>Select Item Category</label>";
        $isql = "SELECT * FROM category";
        $iresult = mysqli_query($db_conn, $isql);
        echo "<select name='newcatset' required>";
        while ($irow = $iresult->fetch_assoc()) {
            if ($irow['id'] == $row['cat_id']) {
                echo "<option value='" . $irow['id'] . "' selected>" . $irow['name'] . "</option>";
            } else {
                echo "<option value='" . $irow['id'] . "'>" . $irow['name'] . "</option>";
            }

        }
        echo "</select>";
        $price = (int) $row['unit_price'];
        echo "<br><br><label>New Item Rate (₹)</label>";
        echo "<input type='number' name='itemrate' value=$price required><br><br>";
        $qu = (int) $row['quantity'];
        echo "<label>New Item Quantity</label>";
        echo "<input type='number' name='itemq' value=$qu required><br><br>";
        echo "<label>Status</label>";
        echo "<select name='newstat' required>";
        if ($row["item_status"] == 1) {
            $itstat = "Active";

            echo "<option value='" . $row['item_status'] . "' selected>$itstat</option>";
            echo "<option value='2'>Disabled</option>";
        } else {
            $itstat = "Disabled";
            echo "<option value='1'>Active</option>";
            echo "<option value='" . $row['item_status'] . "' selected>$itstat</option>";
        }
        echo "</select><br>";
        echo "<button class='submitnewcat' name='submit4' type='submit' value='Submit'>Update</button>";
        echo "</form>";
    }
    $db_conn->close();
}?>
    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>