<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">UD. Ayu Lestari</h1>
                                    </div>

                                    <form class="user" action="home/admin" method="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="login" placeholder="Username">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password">
                                        </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="remember" class="form-check-input">
                                                </label>
                                            </div>
                                            <br>


                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/home/register'); ?>">Registrasi Baru!</a>
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