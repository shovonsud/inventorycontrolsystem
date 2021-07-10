<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Products</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Items</i></h1>
        <div class="buton">
            <button class="addcategory" type="button" onclick="window.location.href='edititem.php'">Edit
                Item</button><br><br><br>
            <button class="addcategory" type="button" onclick="window.location.href='add_item.php'">Add Item</button>
        </div>
        <div class="scrollit" style="overflow:scroll;height:500px;">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Unit Price<br><small>(₹)</small></th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>

                <?php
$sql = "SELECT a.*,b.name FROM product a,category b WHERE a.cat_id=b.id ORDER BY a.item_id ASC;";
$result = $db_conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["item_status"] == 1) {
            $itemstat = "Active";
        } else {
            $itemstat = "Disabled";
        }
        echo "<tr><td>" . $row["item_id"] . "</td><td>" . $row["item_name"] . "</td><td>" . $row["name"] . "</td><td>" . $row["unit_price"] . "</td><td>" . $row["quantity"] . "</td><td>" . $itemstat . "</td></tr>";
    }
    echo "</table>";
} else {echo "0 results";}
$db_conn->close();
?>

            </table>
        </div>
    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>