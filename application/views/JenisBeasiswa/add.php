<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="<?= base_url('JenisBeasiswa/jenisbeasiswa_tambah'); ?>" method="POST">
            <div class="form-group">
                <label for="jenis_beasiswa">Jenis Beasiswa<span style="color:red;">*</span></label>
                <input type="text" name="jenis_beasiswa" class="form-control" id="jenis_beasiswa" placeholder="Jenis Beasiswa" value="<?= set_value('jenis_beasiswa'); ?>">
                <?= form_error('jenis_beasiswa', '<small class="text-danger pl-3">', '</small>'); ?>
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