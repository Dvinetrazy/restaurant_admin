<?php
    if(isset($_POST['id'])){
        include "koneksi.php";
        $id_menu        = $_POST['id'];
        $nama_menu      = $_POST['nama'];
        $harga_menu    = $_POST['harga'];
        $tipe_menu    = $_POST['tipe'];
        $status_menu     = $_POST['status'];

        $query = "UPDATE menu SET nama='".$nama_menu."', harga='".$harga_menu."', tipe='".$tipe_menu."',
        status='".$status_menu."' WHERE id=".$id_menu;
        $result = mysqli_query($koneksi, $query);

        //mengecek apakah ada error ketika menjalankan query
        if(!$result){
            die ("Query Error: ".mysqli_error($koneksi)." - ".mysqli_error($koneksi));
        }else{
            // apabila edit data berhasil, maka redirect ke halaman lihat_data.php
            header("Location: lihat_data.php"); 
        }

    }else{
        echo "Form edit menu harus di isi";
    }
?>