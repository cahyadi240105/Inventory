<?php
    if(isset($_POST['tmasuk'])){
        $barangnya = htmlspecialchars($_POST['barangnya'], ENT_QUOTES);
        $penerima = htmlspecialchars($_POST['penerima'], ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stok'],ENT_QUOTES);

        $cekstocksekarang = mysqli_query($conn,"SELECT * FROM tbl_stok WHERE id_barang = '$barangnya'");
        $ambildata = mysqli_fetch_array($cekstocksekarang);

        $stocksekarang = $ambildata['stok'];
        $tambahstockdenganqty = $stocksekarang+$stock;

        $tmasuk = mysqli_query($conn,"INSERT INTO tbl_masuk (id_barang,keterangan,stok) VALUES ('$barangnya','$penerima','$stock')");
        $updatestockmasuk = mysqli_query($conn,"UPDATE tbl_stok SET stok='$tambahstockdenganqty' WHERE id_barang='$barangnya'");
        if($tmasuk&&$updatestockmasuk){
            echo"<script>
            alert('Data Berhasil Ditambahkan');
            document.location='?hal=barang-masuk'
            </script>";
        }else{
            echo"<script>
            alert('Data Gagal Ditambahkan');
            document.location='?hal=barang-masuk'
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
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Barang Masuk</h1>
                    </div>
                    <form class="user" method="POST" action="">
                        <div class="form-group">
                            <select name="barangnya" id="" class="form-control">
                                
                                <?php 
                                
                                    $ambilsemuadata = mysqli_query($conn,"SELECT * FROM tbl_stok");
                                    while($fetcharray = mysqli_fetch_array($ambilsemuadata)){
                                     $namabarangnya = $fetcharray['nama_barang'];
                                     $idbarang = $fetcharray['id_barang'];
                                ?>

                        <option value="<?=$idbarang;?>"><?=$namabarangnya?></option>  
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="" aria-describedby="emailHelp"
                                placeholder="Penerima" autocomplete="off" required name="penerima">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"
                                id="" placeholder="Stok" autocomplete="off" required name="stok">
                        </div>
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
