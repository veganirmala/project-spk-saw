<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="<?= base_url('JenisPrestasi/jenisprestasi_tambah'); ?>" method="POST">
            <div class=" form-group">
                <label for="nama">Nama<span style="color:red;">*</span></label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prestasi" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Prestasi<span style="color:red;">*</span></label>
                <select class="form-control" tabindex="-1" aria-hidden="true" name="jenis" value="<?= set_value('jenis'); ?>">
                            <option value="Akademik">Akademik</option>
                            <option value="Non Akademik">Non Akademik</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="tingkat">Tingkat Prestasi<span style="color:red;">*</span></label>
                <select class="form-control" tabindex="-1" aria-hidden="true" name="tingkat" value="<?= set_value('tingkat'); ?>">
                            <option value="Intern Kampus">Intern Kampus</option>
                            <option value="Kabupaten">Kabupaten</option>
                            <option value="Provinsi">Provinsi</option>
                            <option value="Nasional">Nasional</option>
                        </select>
                <?= form_error('tingkat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class=" form-group">
                <label for="nilai">Nilai<span style="color:red;">*</span></label>
                <input type="text" name="nilai" class="form-control" id="nilai" placeholder="Nilai Prestasi" value="<?= set_value('nilai'); ?>">
                <?= form_error('nilai', '<small class="text-danger pl-3">', '</small>'); ?>
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