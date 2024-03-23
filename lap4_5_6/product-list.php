/* The provided code is a PHP script that displays a list of products in a table format on a web page.
Here is a breakdown of what the code does: */
<?php
// Include the product class file
require_once('entities/product.class.php');
?>

<?php
// Include the header section of the page
include_once('header.php');

// Get the list of products from the database
$prods = Product::list_product();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Table to display product information -->
            <table border="1" class="table">
                <tr>
                    <td>Picture</td>
                    <td>Product Name</td>
                    <td>CateID</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Description</td>
                </tr>
                <?php
                // Loop through each product and display the information in the table
                foreach ($prods as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['Picture'] ?></td>
                        <td><?php echo $item['ProductName'] ?></td>
                        <td><?php echo $item['CateID'] ?></td>
                        <td><?php echo $item['Price'] ?></td>
                        <td><?php echo $item['Quantity'] ?></td>
                        <td><?php echo $item['Description'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php
// Include the footer section of the page
include_once('footer.php');
?>
