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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<p>
		Lihat Data: <a href="lihat_data.php">disini</a>
	</p>
	<p>
		Tambah Data: <a href="tambah.php">disini</a>
	</p>
</body>
</html>