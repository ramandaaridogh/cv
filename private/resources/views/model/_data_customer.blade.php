<div id="ipt_customer" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title text-uppercase"><i class="icon-user-plus position-left"></i> Tambah Data Customer
                    e-Projects</h5>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="input_customer">
                    <fieldset class="content-group">
                        <legend>
                            <span class="text-bold">Form input Customer</span>
                            <span class="pull-right text-muted">New ID Customer : </span>
                        </legend>
                        <div class="form-group has-feedback has-feedback-left">
                            <div class="col-sm-6">
                                <label class="text-bold">Nama Customer</label>
                                <input type="text" class="form-control input-lg" placeholder="Nama Lengkap Customer"
                                    id="nama" name="nama" required="required">
                                <input type="hidden" id="code" name="code" value="" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label class="text-bold">Jenis Kelamin</label>
                                <select data-placeholder="Pilih Jenis Kelamin" class="select" id="jk" name="jk"
                                    required="required">
                                    <option></option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="text-bold">Tanggal Daftar Customer</label>
                                <input type="text" class="form-control input-lg" id="tgl" name="tgl"
                                    value="<?php echo date('d F Y') ?>" disabled>
                                <div class="form-control-feedback">
                                    <i class="icon-calendar3"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <div class="col-sm-4">
                                <label class="text-bold">No. Telp Customer</label>
                                <input type="text" class="form-control input-lg" placeholder="No. Telp Customer"
                                    id="notlp" name="notlp" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-phone"></i>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-bold">Email Customer</label>
                                <input type="text" class="form-control input-lg" placeholder="Email Customer" id="email"
                                    name="email" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-envelope"></i>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-bold">Asal Kampus</label>
                                <select data-placeholder="Pilih Asal Kampus" class="select" id="kampus" name="kampus"
                                    required="required">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <div class="col-sm-12">
                                <label class="text-bold">Alamat Customer</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Customer"
                                    required></textarea>
                                <div class="form-control-feedback">
                                    <i class="icon-pin-alt"></i>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="pull-right">
                                    <input type="submit" class="btn btn-primary" value="Simpan Data Customer">
                                    <input type="reset" class="btn btn-danger" value="Cancel">
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>