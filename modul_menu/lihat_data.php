<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.card{
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                <center><b>Favedia</b></center> 
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="statusOrder.php">Check Status Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart <i class="uil uil-shopping-cart-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loginpage.php">Login <i class="uil uil-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>


<br><br><br><br><br>
	<center><h1 style="background-color:red; color:white">RESTORAN SUNDA EMPIRE</h1></center>
<div class="container mt-5">
	<center><a href="index.php" class="btn btn-primary">kembali</a> | <a href="tambah.php" class="btn btn-primary">tambah menu</a></center>
</div>
<br>
	<div class="container mt-3">
	<table border="1" class="table">
		<thead class="thead-dark">
			<tr>
				<th>id</th>
				<th>Nama Menu</th>
				<th>Harga Menu (Rp.)</th>
				<th>Tipe Menu</th>
				<th>Status Menu</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query 	= "SELECT * FROM menu";
				$result = mysqli_query($koneksi,$query);

				//mengecek apakah ada error ketika menjalankan query
				if(!$result){
					die ("Query Error: ".mysqli_error($koneksi)." - ".mysqli_error($koneksi));
				}

				if(mysqli_num_rows($result) == 0){
						echo '
							<tr>
								<td colspan="5">Tidak Ada Data</td>
							</tr>';
				}else{

					$no = 1;
					while($row = mysqli_fetch_assoc($result)){
						echo '
							<tr>
								<td>'.$no++.'</td>
								<td>'.$row["nama"].'</td>
								<td>'.$row["harga"].'</td>
								<td>'.$row["tipe"].'</td>
								<td>'.$row["status"].'</td>
								<td>
									<a href="edit_data.php?id='.$row["id"].'"><button type="button" class="btn btn-secondary">edit</button></a> | 
									<a href="hapus_data.php?id='.$row["id"].'"><button type="button" class="btn btn-danger">Hapus</button></a>
								</td>
							</tr>';
					}
				}
			?>
		</tbody>
	</table>
	</div>
<br>
</body>
</html>