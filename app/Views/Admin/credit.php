<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

<!-- Page Heading -->
<!-- Begin Page Content -->

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Credit</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the.</p>
    <div class="card shadow mb-4">
    
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

<?= $this->endSection(); ?>