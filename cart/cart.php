<?php
 session_start();
 if(!isset($_SESSION['username'])){
 header("locaGon:../login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Cart</h1>

    <?php
    // Ambil data menu dari query string
    $menu = isset($_GET['menu']) ? $_GET['menu'] : '';
    $price = isset($_GET['price']) ? $_GET['price'] : '';

    // Tampilkan data menu di cart.php
    if ($menu && $price) {
        echo "<p>Menu : $menu</p>";
        echo "<p>Price : Rp. $price</p>";
    } else {
        echo "No menu selected.";
    }
    ?>
</body>
</html>
