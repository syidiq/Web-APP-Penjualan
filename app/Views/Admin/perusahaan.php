<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">


<!-- Begin Page Content -->


            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Daftar Perusahaan</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                For more information about DataTables, please visit the <a target="_blank"
                    href="https://datatables.net">official DataTables documentation</a>.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Kota/Kabupaten</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Kota/Kabupaten</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($userq as $u) : ?> 
                                <tr>
                                    <td> <?= $u['id']; ?> </td>
                                    <td> <?= $u['username']; ?> </td>
                                    <td> <?= $u['nama_lengkap']; ?> </td>
                                    <td> <?= $u['kota']; ?> </td>
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
            </div>
            
<!-- end Page Content -->

            <!-- /.container-fluid -->

</div>

<!-- input Modal-->
<?= $this->include('admin/modals/detail_user'); ?>
<!-- end Modal-->

<?= $this->endSection(); ?>