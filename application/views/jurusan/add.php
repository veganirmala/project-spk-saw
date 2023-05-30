<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="<?= base_url('jurusan/jurusan_tambah'); ?>" method="POST">
            <div class=" form-group">
                <label for="nama_jurusan">Nama Jurusan<span style="color:red;">*</span></label>
                <input type="text" name="nama_jurusan" class="form-control" id="nama_jurusan" placeholder="Nama Jurusan" value="<?= set_value('nama_jurusan'); ?>">
                <?= form_error('nama_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
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