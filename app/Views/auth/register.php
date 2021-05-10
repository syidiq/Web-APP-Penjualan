<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>


<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
                        </div>
                        
                        <form class="user" action="<?= base_url('home/register') ?>" method="post">


                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="username"
                                    placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nama_lengkap"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="alamat"
                                    placeholder="Alamat">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="kota"
                                    placeholder="Kota/Kabupaten">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="no_hp"
                                    placeholder="Nomor HP/WhatsApp">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        name="password"  placeholder="Password">
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        name="pass_confirm" placeholder="Confirmasi password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Registrasi
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <p> Jika Sudah Memiliki Akun  <a class="small" href="<?= base_url('/'); ?>">SigIn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection(); ?>