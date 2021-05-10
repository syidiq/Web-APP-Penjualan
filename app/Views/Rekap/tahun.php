<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col text-sms">
    <h1 class="h3 mb-4 text-gray-800">Rekap Tahun </h1> <h1 class="fw-bold"> <?= $tahun_r ?> </h1> 
    
    </div>
    <div class="col">
        <form class="row d-inline" action="/home/tahun" method="post">
            <?= csrf_field() ?>

            <div class="col-auto d-inline">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tahun">
                <option selected>Bulan</option>
            <?php foreach($thn as $t) : ?>
                <option value="<?= $t['tahun']; ?>"><?= $t['tahun']; ?></option>
            <?php endforeach ?>
            </select>
            </div>
            <div class="col-auto d-inline">
            <button type="submit" class="btn btn-info">Rekap <i class="fas fa-angle-double-down"></i></button>
            </div>
        </form>
    </div>

</div>
<div class="row">
<div class="col">

<div class="card shadow mb">
<!-- DataTales Example -->
<div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Perusahaan</th>
                                    <th>Jumlah Ayam</th>
                                    <th>Total Harga</th>
                                    <th>Debet/Pembayaran</th>
                                    <th>Ket</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Perusahaan</th>
                                    <th>Jumlah Ayam</th>
                                    <th>Total Harga</th>
                                    <th>Debet/Pembayaran</th>
                                    <th>Ket</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($jual as $j) : ?> 
                                <tr>
                                    <td> <?= $j['nama_perusahaan']; ?> </td>
                                    <td> <?= $j['jumlah_ayam']; ?> </td>
                                    <td> <?= number_format($j['total_harga'], 0); ?> </td>
                                    <td> <?= number_format($j['bayaran'], 0); ?> </td>
                                    <td> 
                                        <!-- <?= $j['ket']; ?>  -->
                                    
                                    <?php if($j['ket']==1) : ?>
                                        <div class="badge bg-success text-wrap" style="width: 4rem;">
                                            Lunas
                                        </div>
                                        <?php elseif($j['ket']>1) : ?>
                                            <div class="badge bg-warning text-wrap" style="width: 4rem;">
                                                Credit
                                            </div>
                                            <?php endif ?>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        <!-- End DataTales Example -->
</div>
</div>
</div>


</div>

<?= $this->endSection(); ?>