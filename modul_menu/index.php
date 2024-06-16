<?php
 session_start();
 if(!isset($_SESSION['username'])){
 header("locaGon:../login.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!-- As a link -->
	<nav class="navbar navbar-light bg-light">
  		<a>Klik disini untuk melihat data menu</a><br>
	</nav>
	<a class="navbar-brand mb-0 h1" href="lihat_data.php"> &nbsp&nbsp&nbsp--> Lihat Menu</a>

<!-- As a heading -->
	<nav class="navbar navbar-light bg-light">
  		<a>Klik disini untuk menambah data menu</a><br>
	</nav>
	<a class="navbar-brand mb-0 h1" href="tambah.php"> &nbsp&nbsp&nbsp--> Tambah Menu</a>
</body>
</html>