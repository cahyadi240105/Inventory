<?php

    @$halaman = $_GET['hal'];

    if($halaman == "barang-masuk")
    {
        
        include "modul/barang_masuk.php";
        
    }else if($halaman == "stok-gudang"){
        
        include "modul/stok_gudang.php";

    }else if ($halaman == "barang-keluar"){
        // tampilkan halaman arsip
        include "modul/barang_keluar.php";

    }elseif ($halaman == "tambah-stok-gudang"){

        include "page/stokgudang.php";

    }elseif ($halaman == "tambah-barang-masuk"){

        include "page/barangmsk.php";

    }elseif ($halaman == "tambah-barang-keluar"){

        include "page/barangklr.php";


    }elseif ($halaman == "update"){

        include "file/update_stok.php";

    }elseif ($halaman == "update-barang-masuk"){

        include "file/update_m.php";

    }elseif ($halaman == "update-barang-keluar"){

        include "file/update_k.php";

    }elseif ($halaman == "hapus"){

        include "file/hapus.php";

    }elseif ($halaman == "hapus-barang-masuk"){

        include "file/hapus_masuk.php";

    }elseif ($halaman == "hapus-barang-keluar"){

        include "file/hapus_keluar.php";
    }
    else{
        // echo"Tampil Halaman Home";
        include "modul/home.php";
    }
?>