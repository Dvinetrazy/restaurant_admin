<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php		
		if(isset($_GET['id'])){
			include "koneksi.php";

			$id = $_GET['id']; // id menu

			// cek id menu apakah ada di table menu
			$query_cek = "SELECT * FROM karyawan WHERE id=".$id;
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
							ID Karyawan : <input type="text" name="id" value="<?= $data['id'] ?>" readonly>
						</p>
						<p>
							Nama : <input type="text" name="nama" value="<?= $data['nama']; ?>">
						</p>
						<p>
							Alamat : <input type="text" name="alamat" value="<?= $data['alamat']; ?>">
						</p>
						<p>
							No. Hp : <input type="number" name="nomor" value="<?= $data['nomor']; ?>">
						</p>
						<p>
							Email : <input type="text" name="email" value="<?= $data['email']; ?>">
						</p>
						<p>
        		<label for="gender">Gender : </label>
            		<select name="gender" id="gender" value="<?= $data['gender']; ?>">
                		<option value="perempuan">Perempuan</option>
               			<option value="laki-laki">Laki-laki</option>
            		</select>
        </p>
		<p>
        <label for="jabatan">Jabatan : </label>
            <select name="jabatan" id="jabatan" value="<?= $data['jabatan']; ?>">
                <option value="manager">Manager</option>
                <option value="koki">Koki</option>
                <option value="pelayan">Pelayan</option>
                <option value="kasir">Kasir</option>
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