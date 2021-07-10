<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Order Records</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Order Records</i></h1>
        <div class="scrollit" style="overflow:scroll;height:500px;">
            <table>
                <tr>
                    <th>Order Id</th>
                    <th>Customer Name</th>
                    <th>Customer Address</th>
                    <th>Customer Phone</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Total<br><small>(₹)</small></th>
                    <th>TimeStamp</th>
                </tr>
                <?php
$sql = "SELECT a.*,b.item_name FROM orders a,product b WHERE a.cust_item_id=b.item_id ORDER BY a.order_id ASC";
$result = $db_conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["order_id"] . "</td><td>" . $row["cust_name"] . "</td><td>" . $row["cust_addr"] . "</td><td>" . $row["cust_phn"] . "</td><td>" . $row["item_name"] . "</td><td>" . $row['cust_quant'] . "</td><td>" . $row['order_total'] . "</td><td>" . $row["timestamp"] . "</td></tr>";
    }
    echo "</table>";
} else {echo "0 results";}
$db_conn->close();
?>
            </table>
        </div><br>
        <button class="print" type="button" target="_blank" onclick="window.location.href='printrec.php'">Print</button>
    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>