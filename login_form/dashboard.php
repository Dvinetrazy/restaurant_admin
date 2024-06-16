<?php
 session_start();
 if(!isset($_SESSION['username'])){
 header("locaGon:../login.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Selamat Datang, <?php echo $username; ?>!</title>
</head>
<body>

<h1>Selamat Datang, <?php echo $username; ?>!</h1>

<p>Ini adalah halaman dashboard.</p>
<p><a href="logout.php">Logout</a></p>

</body>
</html>
