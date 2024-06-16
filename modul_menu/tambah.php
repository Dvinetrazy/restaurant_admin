<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form action="proses_tambah.php" method="post">
		<p>
			Nama Menu: <input type="text" name="nama">
		</p>
		<p>
			Harga Menu : <textarea name="harga"></textarea>
		</p>
        <p>
        <label for="tipe">Tipe Menu : </label>
            <select name="tipe" id="tipe">
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </p>
        <p>
        <label for="status">Status Makanan : </label>
            <select name="status" id="status">
                <option value="tersedia">Tersedia</option>
                <option value="habis">Habis</option>
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