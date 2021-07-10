<?php
require_once "../admin/admin_panel.php";
?>
<!DOCTYPE html>

<head>
    <title>Add Category</title>
</head>

<body>
    <div class="bodystart">
        <h1><i>Add Category</i></h1>

        <form method="POST" action="newcategory.php" style="padding-top:30px;">
            <label>Category Name</label>
            <input type="text" name="categoryname" placeholder="Category Name" required>
            <label>Category ID</label>
            <input class="catidcont" type="number" readonly name="categoryid" placeholder="System generated"
                style="cursor:no-drop"><br><br><br>
            <label>Status</label>
            <select name="categorystatus" required>
                <option value=''>Select</option>
                <option value="1">Active</option>
                <option value="2">Disabled</option>
            </select><br><br>
            <button class="submitnewcat" name="submit1" type="submit" value="Submit">Add Category</button>
        </form>
    </div>
</body>
<?php
require_once "../include/footer.php";?>

</html>