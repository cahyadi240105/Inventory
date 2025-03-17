<?php

    $tampil = mysqli_query($conn, "SELECT * FROM tbl_masuk");
    $data = mysqli_fetch_array($tampil);

?>
<div class="container">
<div class="row mt-2">
    <div class="col-lg-5 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
            <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Data Barang Masuk</h1>
                    </div>
                    <form class="user" method="POST" action="">
                        <?php 
                         if(isset($_POST['tmasuk'])){
                            $bupdate = mysqli_query($conn,"UPDATE tbl_masuk SET keterangan = '$_POST[keterangan]', stok = '$_POST[stok]'");
                            if($bupdate){
                                echo"<script>
                                alert('Data Berhasil Diubah');
                                document.location='?hal=barang-masuk'
                                </script>";
                            }else{
                                echo"<script>
                                alert('Data Gagal Diubah');
                                document.location='?hal=barang-masuk'
                                </script>";
                            }
                        }
                        ?>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="" aria-describedby="emailHelp"
                                value="<?= $data['keterangan']?>"autocomplete="off" required name="keterangan">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"
                                value="<?=$data['stok']?>" autocomplete="off" required name="stok">
                        </div>
                        <input type="hidden" name="id_barang" value="<?= $idb;?>">
                        <input type="hidden" name="id_masuk" value="<?= $idm;?>">
                        <button class="btn btn-primary btn-user btn-block" name="tmasuk" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
