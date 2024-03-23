/* The provided code is an HTML document that includes PHP code snippets. Here's a breakdown of what it
does: */
<!DOCTYPE html>
<html>

<head>
    <title>PHP Object Oriented Programming</title>

    <meta charset="utf-8">
    <meta name="author" content="HuynhThaiHung.com" />

    <!-- Link to the CSS file to style the webpage -->
    <link href="../lap1/style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <?php
            // Require the 'nhanvien.php' file to use the member class
            require_once("nhanvien.php");

            // Create a new member object and display member information
            $sv = new member("Nguyen Van A", "email1@gmail.com");
            echo "<h2>-- Member information --</h2>";
            echo "Code: " . $sv->get_id() . "<br/>";
            echo "Fullname: " . $sv->get_fullname() . "<br/>";
            echo "Email: " . $sv->get_email() . "<br/>";
            ?>

            <?php
            // Create another new member object and display member information
            $sv2 = new member("Tran Van B", "email2@gmail.com");
            echo "<h2>---More information--</h2>";
            echo "Code: " . $sv2->get_id() . "<br/>";
            echo "Fullname: " . $sv2->get_fullname() . "<br/>";
            echo "Email: " . $sv2->get_email() . "<br/>";
            ?>
        </div>
        <!-- Footer section -->
        <footer>
            <p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>
    </div>

    <?php
    // Include the 'staff.php' file to use the staff class
    include("staff.php");
    // Create a new staff object and display information
    $nhanvat = new staff("Nguyen Van A", 5678, "Ceo");
    echo "<h2>--- Add: Object Oriented PHP --</h2>";
    echo "Full name: " . $nhanvat->get_fullname() . "<br/>";
    echo "Country code: " . $nhanvat->get_countrycode() . "<br/>";
    ?>

    <?php
    // Create another new staff object and display information
    $staff = new staff("Nguyen Van B", 1234, "Guard");
    echo "<h2>---Staff--</h2>";
    echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>";
    echo "Họ tên: " . $staff->get_fullname() . "<br/>";
    echo "Mã QG: " . $staff->get_countrycode() . "<br/>";
    echo "Bộ phận: " . $staff->get_part() . "<br/>";
    ?>
</body>

</html>
