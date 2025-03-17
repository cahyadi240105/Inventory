 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Stok Gudang</h6>
    </div>
    <div class="mt-3" style="margin-left: 1rem;">
        <a class="btn btn-primary" href="?hal=tambah-stok-gudang" role="button"><i class="fas fa-plus"></i></a>
        <a class="btn btn-success" href="./exporttoexcel.php" role="button"><i class="fas fa-download"></i> Eksport To Excel</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Aksi  </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        $tampil = mysqli_query($conn, "SELECT * FROM tbl_stok");
                        $i = 1;
                        while($data=mysqli_fetch_array($tampil)){
                            $namabarang = $data['nama_barang'];
                            $deskripsi = $data['deskripsi'];
                            $stock = $data['stok'];
                            $idb = $data['id_barang'];

                    ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $namabarang; ?></td>
                        <td><?= $deskripsi; ?></td>
                        <td><?= $stock; ?></td>
                        <td class="Aksi">
                            <a href="?hal=update" class="btn btn-warning btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>
                            <input type="hidden" name="idb" value="<?= $idb;?>">
                            <a href="?hal=hapus" class="btn btn-danger btn-circle" onclick= "return confirm('Anda yakin ingin menghapus data ini');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
