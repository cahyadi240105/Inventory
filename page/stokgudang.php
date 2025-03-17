<?php
    if(isset($_POST['bsimpan'])){
        $namabarang = htmlspecialchars($_POST['nama_barang'], ENT_QUOTES);
        $deskripsi = htmlspecialchars($_POST['deskripsi'],ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stok'],ENT_QUOTES);

        $bsimpan = mysqli_query($conn,"INSERT INTO tbl_stok VALUES('','$namabarang','$deskripsi','$stock')");
        if($bsimpan){
            echo"<script>
            alert('Data Berhasil Ditambahkan');
            document.location='?hal=stok-gudang'
            </script>";
        }else{
            echo"<script>
            alert('Data Gagal Ditambahkan');
            document.location='?hal=stok-gudang'
            </script>";
        }
    }
 ?>
<div class="container">
<div class="row mt-2">
    <div class="col-lg-5 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
            <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Stok Gudang</h1>
                    </div>
                    <form class="user" method="POST" action="">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                            placeholder="Nama Barang" autocomplete="off" name="nama_barang" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                             placeholder="Deskripsi" autocomplete="off" name="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user"
                             placeholder="Stok" autocomplete="off" name="stok" required>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" name="bsimpan" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
