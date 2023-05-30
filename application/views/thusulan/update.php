<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="" method="POST">
        <input type="hidden" name="id_usulan" id="id_usulan" value="<?= $usulan['id_usulan']; ?>">
            <div class=" form-group">
                <label for="id_jenis_beasiswa">Jenis Beasiswa<span style="color:red;">*</span></label>
                <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jenis_beasiswa" value="<?= set_value('id_jenis_beasiswa'); ?>">
                        <option value="<?php echo $usulan['id_jenis_beasiswa']; ?>"><?php echo $usulan['jenis_beasiswa']; ?></option>
                        <?php foreach ($jenisbeasiswa as $p) : ?>
                        <option value="<?php echo $p['id_jenis_beasiswa']; ?>"><?php echo $p['jenis_beasiswa']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('id_jenis_beasiswa', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class=" form-group">
                <label for="tahun">Tahun<span style="color:red;">*</span></label>
                <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun" value="<?= (set_value('tahun')) ? set_value('tahun') : $usulan['tahun']; ?>">
                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class=" form-group">
                <label for="kuota">Kuota<span style="color:red;">*</span></label>
                <input type="text" name="kuota" class="form-control" id="kuota" placeholder="Kuota" value="<?= (set_value('kuota')) ? set_value('kuota') : $usulan['kuota']; ?>">
                <?= form_error('kuota', '<small class="text-danger pl-3">', '</small>'); ?>
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