 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang Masuk</h6>
    </div>
    <div class="mt-3" style="margin-left: 1rem;">
        <a class="btn btn-primary" href="?hal=tambah-barang-masuk" role="button"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal & Waktu</th>
                        <th>Nama Barang</th>
                        <th>Penerima</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal & Waktu</th>
                        <th>Nama Barang</th>
                        <th>Penerima</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                <?php 
                    $simpan = mysqli_query($conn, "SELECT * FROM tbl_stok s, tbl_masuk m WHERE m.id_barang = m.id_barang");
                    $i = 1;
                    while($data=mysqli_fetch_array($simpan)){
                        $tanggal = $data['tanggal'];
                        $namabarang = $data['nama_barang'];
                        $penerima = $data['keterangan'];
                        $stok = $data['stok'];

                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $tanggal; ?></td>
                        <td><?= $namabarang; ?></td>
                        <td><?= $penerima; ?></td>
                        <td><?= $stok; ?></td>
                        <td class="Aksi">
                            <a href="?hal=update-barang-masuk" class="btn btn-warning btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="?hal=hapus-barang-masuk" class="btn btn-danger btn-circle" onclick= "return confirm('Anda yakin ingin menghapus data ini');">
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
