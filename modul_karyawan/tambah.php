<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<form action="proses_tambah.php" method="post">
		<p>
			Nama : <input type="text" name="nama">
		</p>
		<p>
			Alamat : <textarea name="alamat"></textarea>
		</p>
        <p>
            Nomor Hp : <input type="number" name="nomor">
        </p>
        <p>
            Email : <input type="email" name="email">
        </p>
        <p>
        <label for="gender">Gender : </label>
            <select name="gender" id="gender">
                <option value="perempuan">Perempuan</option>
                <option value="laki-laki">Laki-laki</option>
            </select>
        </p>
        <p>
        <label for="jabatan">Jabatan : </label>
            <select name="jabatan" id="jabatan">
                <option value="manager">Manager</option>
                <option value="koki">Koki</option>
                <option value="pelayan">Pelayan</option>
                <option value="kasir">Kasir</option>
            </select>
</p>
		<p>
			<input type="submit" name="submit" value="Simpan">
			<input type="reset" name="reset">
			<a href="lihat_data.php">kembali</a>
		</p>
	</form>
</body>
</html>