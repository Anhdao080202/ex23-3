/* The code you provided is a PHP script that includes the header and footer sections of a webpage
using the `include_once` function. Here's what each part of the code does: */
<?php
// Include the header.php file to use the header section of the page
include_once("header.php");
?>

<!-- Lab 4 includes tasks 4, 5, and 6 -->
<ul>
    <!-- Link to the product list page -->
    <li>
        <a href="product-list.php">List of products</a>
    </li>

    <!-- Link to the product addition page -->
    <li>
        <a href="product-add.php">More products</a>
    </li>
</ul>

<?php
// Include the footer.php file to use the footer section of the page
include_once("footer.php");
?>
