/* This PHP code snippet is responsible for processing a form submission for adding a new product.
Here's a breakdown of what the code does: */
<?php
// Include necessary class files
require_once("entities/product.class.php");
require_once('entities/category.class.php');

// Process when the form is submitted
if (isset($_POST["btnsubmit"])) {
    // Get values from the form
    $productName = $_POST["txtname"];
    $cateID = $_POST["txtcateid"];
    $price = $_POST["txtprice"];
    $quantity = $_POST["txtquantity"];
    $description = $_POST["txtdesc"];
    $picture = $_FILES["txtpic"];

    // Initialize a new Product object
    $newProduct = new Product(
        $productName,
        $cateID,
        $price,
        $quantity,
        $description,
        $picture
    );

    $loi = array();
    $loi_str = "";

    // Save to the database
    $result = $newProduct->save($loi);

    if (!$result) {
        // If there's an error, redirect to the product addition page with a failure message
        header("Location: product-add.php?status=failure");
    } else {
        // If successful, redirect to the product addition page with a success message
        header("Location: product-add.php?status=inserted");
    }
}
?>
<?php if ($loi_str != "") {
?>
    <!-- Display error message if there is one -->
    <div class="alert alert-danger"><?php echo $loi_str ?></div>
<?php } ?>
<?php require 'header.php'; ?>
<?php
// Display the result message of adding a product
if (isset($_GET["status"])) {
    if ($_GET["status"] == 'inserted') {
        echo "<h2>Add successful product.</h2>";
    } else {
        echo "<h2>Add failed product.</h2>";
    }
}
?>
<!-- Product addition form -->
<form method="post" enctype="multipart/form-data">
    <!-- Product name -->
    <div class="row">
        <div class="lbltitle">
            <label> Product's name </label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtname" value="<?php echo isset($_POST["txtname"]) ? $_POST["txtname"] : "" ?>">
        </div>
    </div>
    <!-- Product Description -->
    <div class="row">
        <div class="lbltitle">
            <label> Product Description </label>
        </div>
        <div class="lblinput">
            <textarea type="text" name="txtdesc" cols="21" rows="10"><?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : "" ?></textarea>
        </div>
    </div>
    <!-- Number of products -->
    <div class="row">
        <div class="lbltitle">
            <label> The number of products </label>
        </div>
        <div class="lblinput">
            <input type="number" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : "" ?>">
        </div>
    </div>
    <!-- Product price -->
    <div class="row">
        <div class="lbltitle">
            <label> Product price </label>
        </div>
        <div class="lblinput">
            <input type="number" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : "" ?>">
        </div>
    </div>
    <!-- Product Type -->
    <div class="row">
        <div class="lbltitle">
            <label> Product Type </label>
        </div>
        <div class="lblinput">
            <select name="txtcateid">
                <option value="" selected>-- Select type --</option>
                <?php $cates = Category::list_category() ?>
                <?php foreach ($cates as $item) { ?>
                    <option value="<?php echo $item['CateID'] ?>"><?php echo $item['CategoryName'] ?></option>
                <?php } ?>
            </select>
            <?php echo isset($_POST["txtcateid"]) ? $_POST["txtcateid"] : "" ?>
        </div>
    </div>
  
