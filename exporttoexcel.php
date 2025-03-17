<?php

    include "koneksi.php";
    
    // persiapan untuk excel
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename= Rekap Data Gudang.xls");
    header("Pragma: no-cache");
    header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6">Rekapitulasi Data Gudang</th>
        </tr>
        <tr>
        <tr>
            <th colspan="1" style="text-align:center;">No.</th>
            <th colspan="2" style="text-align:center;">Nama Barang</th>
            <th colspan="2" style="text-align:center;">Deskripsi Barang</th>
            <th colspan="1" style="text-align:center;">Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php           
            $tampil = mysqli_query($conn,"SELECT * FROM tbl_stok");
            $no= 1;
            while($data=mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td colspan="1" style="text-align:center;"><?= $no++ ?></td>
            <td colspan="2" style="text-align:center;"><?= $data['nama_barang']?></td>
            <td colspan="2"style="text-align:center;"><?= $data['deskripsi']?></td>
            <td colspan="1" style="text-align:center;"><?= $data['stok']?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>