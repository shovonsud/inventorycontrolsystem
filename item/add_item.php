<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Add Item</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Add Item</i></h1>

        <form method="POST" action="newitem.php" style="padding-top:20px;">
            <label>Item Name</label>
            <input type="text" name="itemname" required placeholder="Item Name">


            <label>Item ID</label>
            <input class="catidcont" type="number" readonly name="itemid" placeholder="System generated"
                style="cursor:no-drop;"><br><br><br>


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


            <label>Unit Price (₹)</label>
            <input type="number" step="0.001" min="0.001" required name="unit_price"
                placeholder="Enter unit price"><br><br>


            <label>Quantity</label>
            <input type="number" min="1" name="quantity" required
                placeholder="Enter purchased-stock quantity"><br><br><br>


            <label>Status</label>
            <select name="itemstatus" required>
                <option value=''>Select</option>
                <option value="1">Active</option>
                <option value="2">Disabled</option>
            </select><br>
            <button class="submitnewcat" type="submit" name="submit2" value="Submit">Add Item</button>
        </form>
    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>