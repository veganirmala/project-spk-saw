<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                        </div>
                        <form action="<?= base_url('auth/registration'); ?>" method="POST">
                            <div class="form-group">
                                <label for="nama_user">Nama Lengkap<span style="color:red;">*</span></label>
                                <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class=" form-group">
                                <label for="email_user">E-mail<span style="color:red;">*</span></label>
                                <input type="text" name="email_user" class="form-control" id="email_user" placeholder="***@gmail.com" value="<?= set_value('email'); ?>">
                                <?= form_error('email_user', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class=" form-group">
                                <label for="password">Password<span style="color:red;">*</span></label>
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                <br>
                                <div class="form-group ml-2">
                                    <input type="checkbox" class="form-checkbox" id="form-checkbox" name="form-checkbox" onclick="myFunction()">
                                    <label for="showPass">Show Password</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jk_user">Jenis Kelamin</label>
                                <br>
                                <input type="radio" id="perempuan" name="jk_user" value="Perempuan" <?php echo set_radio('jk_user', 'Perempuan', TRUE); ?>>
                                <label>Perempuan</label>
                                <tr><input type="radio" id="laki-laki" name="jk_user" value="Laki-laki" <?php echo set_radio('jk_user', 'Laki-laki', TRUE); ?>>
                                    <label>Laki-laki</label>
                                </tr>
                                <?= form_error('jk_user', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="telp_user">Telepon<span style="color:red;">*</span></label>
                                <input type="text" name="telp_user" class="form-control" id="telp_user" placeholder="Telepon" value="<?= set_value('telp_user'); ?>">
                                <?= form_error('telp_user', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat_user">Alamat<span style="color:red;">*</span></label>
                                <input type="text" name="alamat_user" class="form-control" id="alamat_user" placeholder="Alamat" value="<?= set_value('alamat_user'); ?>">
                                <?= form_error('alamat_user', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" value="Simpan" name="submit" class="btn btn-success btn-user">
                                Registrasi
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url(); ?>auth">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>