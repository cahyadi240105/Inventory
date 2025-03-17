<?php

    $tampil = mysqli_query($conn, "SELECT * FROM tbl_keluar");
    $data = mysqli_fetch_array($tampil);

?>
<div class="container">
<div class="row mt-2">
    <div class="col-lg-5 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
            <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Data Barang keluar</h1>
                    </div>
                    <form class="user" method="POST" action="">
                        <?php 
                         if(isset($_POST['ckeluar'])){
                            $bupdate = mysqli_query($conn,"UPDATE tbl_keluar SET penerima = '$_POST[penerima]', stok = '$_POST[stok]'");
                            if($bupdate){
                                echo"<script>
                                alert('Data Berhasil Diubah');
                                document.location='?hal=barang-keluar'
                                </script>";
                            }else{
                                echo"<script>
                                alert('Data Gagal Diubah');
                                document.location='?hal=barang-keluar'
                                </script>";
                            }
                        }
                        ?>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="" aria-describedby="emailHelp"
                                value="<?= $data['penerima']?>" autocomplete="off" required name="penerima">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"
                                value="<?=$data['stok']?>" autocomplete="off" required name="stok">
                        </div>
                        <input type="hidden" name="id_barang" value="<?= $idb;?>">
                        <input type="hidden" name="id_keluar" value="<?= $idk;?>">
                        <button class="btn btn-primary btn-user btn-block" name="ckeluar" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
