<?php 
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "inventory";

    $conn = new mysqli($server,$username,$pass,$db);
    if($conn->connect_error){
        die("Connection failed :" .$conn->connect_error);
    }
    $sql = "DELETE FROM tbl_masuk WHERE id_barang= 3 ";

    if($conn->query($sql) === TRUE){
        echo"<script>
        alert('Data Berhasil Dihapus')
        document.location='?hal=barang-masuk'
        </script>";
    }else{
        echo"<script>
        alert('Data Gagal Dihapus')
        document.location='?hal=barang-masuk'
        </script>";   
    }
?>