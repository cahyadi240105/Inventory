<?php   
    $tampil = mysqli_query($conn, "SELECT * FROM tbl_stok");
    $data = mysqli_fetch_array($tampil);
?>
<div class="container">
<div class="row mt-2">
    <div class="col-lg-5 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
            <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Data Stok Gudang</h1>
                    </div>
                    <form class="user" method="POST" action="">
                        <?php
                        
                        if(isset($_POST['bupdate'])){
                        $bupdate = mysqli_query($conn,"UPDATE tbl_stok SET nama_barang = '$_POST[nama_barang]', deskripsi = '$_POST[deskripsi]'");
                        if($bupdate){
                            echo"<script>
                            alert('Data Berhasil Diubah');
                            document.location='?hal=stok-gudang'
                            </script>";
                        }else{
                            echo"<script>
                            alert('Data Gagal Diubah');
                            document.location='?hal=stok-gudang'
                            </script>";
                        }
                    }
                        ?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                             value= "<?= $data['nama_barang']?>" autocomplete="off" name="nama_barang" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                             value= "<?= $data['deskripsi']?>" autocomplete="off" name="deskripsi" required>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" name="bupdate" type="submit">
                            Submit
                        </button>
                        <a href="?hal=stok-gudang" class="btn btn-danger btn-user btn-block"><i class="fas fa-backward"></i> Kembali</a>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
