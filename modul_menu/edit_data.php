<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php		
		if(isset($_GET['id'])){
			include "koneksi.php";

			$id = $_GET['id']; // id menu

			// cek id menu apakah ada di table menu
			$query_cek = "SELECT * FROM menu WHERE id=".$id;
			$result_cek = mysqli_query($koneksi,$query_cek);

			//mengecek apakah ada error ketika menjalankan query
			if(!$result_cek	){
				die ("Query Error: ".mysqli_error($koneksi)." - ".mysqli_error($koneksi));
			
			// jika query tidak ada yg error
			}else{ 
				// jika data tidak ada
				if(mysqli_num_rows($result_cek) == 0){
					echo "data tidak tersedia";
				}else{
					$data = mysqli_fetch_array($result_cek);
	?>	
					<form action="proses_edit.php" method="post">
						<p>
							ID Menu : <input type="text" name="id" value="<?= $data['id'] ?>" readonly>
						</p>
						<p>
							Nama Menu : <input type="text" name="nama" value="<?= $data['nama']; ?>">
						</p>
						<p>
							Harga Menu : <input type="number" name="harga" value="<?= $data['harga']; ?>">
						</p>
						<p>
        			<label for="tipe">Tipe Menu : </label>
            			<select name="tipe" id="tipe" value="<?= $data['tipe']; ?>">
                			<option value="makanan">Makanan</option>
               				<option value="minuman">Minuman</option>
            			</select>
        			</p>
					<p>
        			<label for="status">Status Menu : </label>
            			<select name="status" id="status" value="<?= $data['status']; ?>">
               	 			<option value="tersedia">Tersedia</option>
                			<option value="habis">Habis</option>
            			</select>
        </p>
						<p>
							<input type="submit" name="submit" value="Update">
							<a href="lihat_data.php">kembali</a>
						</p>
					</form>
	<?php
				}
			}
		}else{
			echo 'tidak dapat menampilkan form edit menu <a href="lihat_data.php">klik disini</a> untuk kembali';
		}
	?>
</body>
</html>