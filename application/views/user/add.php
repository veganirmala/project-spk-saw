<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="<?= base_url('user/user_tambah'); ?>" method="POST">
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
                Simpan
            </button>
            <button type="button" value="Kembali" onClick="history.go(-1)" class="btn btn-primary btn-user">
                Kembali
            </button>
        </form>
    </div>
    </section>
    <!-- /.content -->
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