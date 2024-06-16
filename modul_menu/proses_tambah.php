<?php
    if(isset($_POST['nama'])){
        include "koneksi.php";
        $nama_menu      = $_POST['nama'];
        $harga_menu    = $_POST['harga'];
        $tipe_menu    = $_POST['tipe'];
        $status_menu     = $_POST['status'];

        $query = "INSERT INTO menu(nama, harga, tipe, status) VALUES('" . $nama_menu . "', '" . $harga_menu . "', 
        '" . $tipe_menu . "', '" . $status_menu . "')";
        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die ("Query Error: " . mysqli_error($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            header("Location: lihat_data.php");
        }
    } else {
        echo "Form tambah menu harus di isi";
    }
?>