<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

<!-- Page Heading -->

<div class="row">
<div class="col">
<!-- Begin Page Content -->


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="col text-sm-left">
            <h3 class="m-0 font-weight-bold text-primary">Tabel Penjualan</h3>
        </div>
        <div class="col text-sm-right">
            <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#InputModal"> 
                <i class="fas fa-cart-plus"></i>
                    Tambah
                </button>
            </div>
        </div>
        
        <!-- DataTales Example -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Perusahaan</th>
                                    <th>Jml Ayam</th>
                                    <th>kg/Ayam</th>
                                    <th>Harga/Ayam</th>
                                    <th>Total Harga</th>
                                    <th>Ket</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Perusahaan</th>
                                    <th>Jml Ayam</th>
                                    <th>kg/Ayam</th>
                                    <th>Harga/Ayam</th>
                                    <th>Total Harga</th>
                                    <th>Ket</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($jual as $j) : ?> 
                                <tr>
                                    <td> <?= $j['tgl']; ?> </td>
                                    <td> <?= $j['nama_perusahaan']; ?> </td>
                                    <td> <?= $j['jumlah_ayam']; ?> </td>
                                    <td> <?= $j['kg']; ?> </td>
                                    <td> <?= number_format($j['harga_unit'], 0); ?> </td>
                                    <td> <?= number_format($j['total_harga'], 0); ?> </td>
                                    <td> 
                                        <!-- <?= $j['ket']; ?>  -->
                                    
                                    <?php if($j['ket']==1) : ?>
                                        <div class="badge bg-success text-wrap" style="width: 4rem;">
                                            Lunas
                                        </div>
                                        <?php elseif($j['ket']==2) : ?>
                                            <div class="badge bg-warning text-wrap" style="width: 4rem;">
                                                Credit
                                            </div>
                                            <?php endif ?>
                                    </td>
                                        

                                    <td> 
                                    <a href="#" class="btn btn-info btn-circle btn-sm data-toggle="modal" data-target="#DetaiUserModal">
                                    <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                    </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        <!-- End DataTales Example -->

            </div>

<!-- end Page Content -->

</div>
</div>
</div>


<!-- input Modal-->
<?= $this->include('admin/modals/input_pesan'); ?>
<!-- end Modal-->




<?= $this->endSection(); ?>

