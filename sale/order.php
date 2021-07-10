<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Customer Order</title>
</head>

<body>
    <script type="text/javascript">
        function getitemdetails() {
            document.getElementById("availquant").value = document.getElementById("itemselect").value;
        }
    </script>
    <div class="bodystart">
        <h1><i>New Order</i></h1>
        <form method="POST" action="neworder.php">
            <label>Customer Name</label>
            <input type="text" name="customername" autofocus placeholder="Enter Customer Name" required>
            <label>Customer Address</label>
            <input type="text" name="customeraddr" placeholder="Enter Customer Address" required><br><br>
            <label>Customer Phone</label>
            <input type="text" name="customerphn" placeholder="Enter Phone no." required minlength="10" maxlength="10"
                size="10" pattern="\d{10}"><br><br><br>
            <label>Choose Item</label>
            <?php
$sql = "SELECT a.*,b.* FROM product a,category b WHERE a.cat_id=b.id ORDER BY a.item_id ASC";
$result = mysqli_query($db_conn, $sql);
echo "<select name='itemsel' id='itemselect' style='cursor:grab' required onchange='getitemdetails()'>";
echo "<option value=''>Select</option>";
while ($row = $result->fetch_assoc()) {
    if ($row['item_status'] == 1 && $row['status'] == 1) {
        echo "<option value='" . $row['item_id'] . "'>" . $row['item_name'] . '  --> Avail. Quantity: ' . $row['quantity'] . '  --> Rate: ₹' . $row['unit_price'] . "</option>";
    }

}
echo "</select>";
$db_conn->close();
?>
            <label>Item ID</label>
            <input type="number" id="availquant" readonly placeholder="Select Item" style="cursor:no-drop"><br><br>
            <label>Required Quantity</label>
            <input type="number" name="reqquant" required pattern="\d" min="1" placeholder="Enter req. quantity"><br>
            <button class="submitnewcat" type="submit" name="subbmit" value="Submit">Confirm Order</button>
        </form>
    </div>
</body>

</html>
<?php
require_once "../include/footer.php";
?>