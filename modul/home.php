<?php

    //menghitung jumlah surat masuk
    $count1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_stok"));

    //menghitung jumlah surat masuk
    $count2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_masuk"));

    //menghitung jumlah pengguna
    $count3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_keluar"));


?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <a href="?hal=stok-gudang">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                STOK GUDANG</div></a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?='<h5 class="white-text link">'.$count1.' Stok Gudang</h5>'; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <a href="?hal=barang-masuk">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                BARANG MASUK</div></a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?='<h5 class="white-text link">'.$count2.' Barang Masuk</h5>'; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <a href="?hal=barang-keluar">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">BARANG KELUAR
                            </div></a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?='<h5 class="white-text link">'.$count3.' Barang Keluar</h5>'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-inbox fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
