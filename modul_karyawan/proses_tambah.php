<?php
    if(isset($_POST['nama'])){
        include "koneksi.php";
        $nama_karyawan      = $_POST['nama'];
        $alamat_karyawan    = $_POST['alamat'];
        $nomor_karyawan    = $_POST['nomor'];
        $email_karyawan     = $_POST['email'];
        $gender_karyawan    = $_POST['gender'];
        $jabatan_karyawan   = $_POST['jabatan'];

        $query = "INSERT INTO karyawan(nama, alamat, nomor, email, gender, jabatan) VALUES('" . $nama_karyawan . "', '" . $alamat_karyawan . "', 
        '" . $nomor_karyawan . "', '" . $email_karyawan . "', '" . $gender_karyawan . "', '" . $jabatan_karyawan . "')";
        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die ("Query Error: " . mysqli_error($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            header("Location: lihat_data.php");
        }
    } else {
        echo "Form tambah karyawan harus di isi";
    }
?>