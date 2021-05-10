
<!-- input Modal-->
<div class="modal fade" id="InputModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> INPUT </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                    <div class="modal-body">
                    Perhatikan data yang diinput!!.
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                        <div class="col-md-12">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>
                        <form class="pesan" action=""> 
                    
                            <div class="form-group row">
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupSelect01">Nama Perusahaan</label>
                                    <select class="form-control form-control-pesan" name="nama">
                                        <option selected></option>
                                        <?php foreach($userq as $u) : ?>
                                        <option value="<?= $u['nama_lengkap']; ?>"><?= $u['nama_lengkap']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Tanggal</span>
                                <div class="col-8">
                                    <input class="form-control form-control-pesan" type="date" value="0000-00-00" name="tgl">
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Jumlah Ayam</span>
                                <div class="col-3">
                                    <input type="number" class="form-control form-control-pesan" name="jumlah">
                                </div>
                                <span class="col-form-label">Ekor Ayam</span>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Total Berat Ayam</span>
                                <div class="col-3">
                                    <input type="float" class="form-control form-control-pesan" name="kg" placeholder="0.00">
                                </div>
                                <span class="col-form-label">Kg</span>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Harga</span>
                                <div class="input-group col-5">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control form-control-pesan" name="harga">
                                </div>
                                <span class="col-form-label">/ Ekor Ayam</span>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Jumlah Mati</span>
                                <div class="col-3">
                                    <input type="number" class="form-control form-control-pesan" name="mati">
                                </div>
                                <span class="col-form-label">Ekor Ayam</span>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Oprasional</span>
                                <div class="input-group col-6">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control form-control-pesan" name="oprasional">
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Jumlah Bayar</span>
                                <div class="input-group col-7">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control form-control-pesan" name="bayar">
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Supir</span>
                                <div class="input-group col-5">
                                    <input type="text" class="form-control form-control-pesan" name="supir">
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <!-- <label for="example-date-input" class="col-2 col-form-label">Tanggal</label> -->
                                <span class="input-group-text col-4 col-form-label">Plat Mobil</span>
                                <div class="input-group col-5">
                                    <input type="text" class="form-control form-control-pesan" name="plat">
                                </div>
                            </div>
                    
                            <div class="row">
                            <div class="col text-sm-right">
                                <button type="submit" class="btn btn-success"> SAVE </button>
                            </div>
                            </div>
                    
                            <!-- <div class="form-group row">
                            <label for="example-month-input" class="col-2 col-form-label">Month</label>
                            <div class="col-10">
                                <input class="form-control" type="month" value="2011-08" id="example-month-input">
                            </div>
                            </div> -->
                        </form>
                        </div>
                        </div>
                    
                    </div>
                    
                    </div>
                    
                <div class="modal-footer">
                    <P>Form Input Penjualan</P>
                </div>
            </div>
        </div>
    </div>
<!-- input Modal-->