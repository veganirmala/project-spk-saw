<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="" method="POST">
        <input type="hidden" name="id_bobot" id="id_bobot" value="<?= $bobotkriteria['id_bobot']; ?>">
        <div class=" form-group">
            <label for="nim">NIM<span style="color:red;">*</span></label>
            <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="<?= (set_value('nim')) ? set_value('nim') : $bobotkriteria['nim']; ?>">
            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">Tahun Usulan<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_usulan" value="<?= set_value('id_usulan'); ?>">
            <option value="<?php echo $bobotkriteria['id_usulan']; ?>"><?php echo $bobotkriteria['tahun']; ?></option>
                <?php foreach ($usulan as $j) : ?>
                    <option value="<?php echo $j['id_usulan']; ?>"><?php echo $j['tahun']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_usulan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">Jenis Beasiswa<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jenis_beasiswa" value="<?= set_value('id_jenis_beasiswa'); ?>">
            <option value="<?php echo $bobotkriteria['id_jenis_beasiswa']; ?>"><?php echo $bobotkriteria['jenis_beasiswa']; ?></option>
                <?php foreach ($jenisbeasiswa as $j) : ?>
                    <option value="<?php echo $j['id_jenis_beasiswa']; ?>"><?php echo $j['jenis_beasiswa']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_jenis_beasiswa', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class=" form-group">
            <label for="kriteria_ipk">Bobot Kriteria IPK<span style="color:red;">*</span></label>
            <input type="text" name="kriteria_ipk" class="form-control" id="kriteria_ipk" placeholder="Kriteria IPK" value="<?= (set_value('kriteria_ipk')) ? set_value('kriteria_ipk') : $bobotkriteria['kriteria_ipk']; ?>">
            <?= form_error('kriteria_ipk', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class=" form-group">
            <label for="kriteria_prestasi">Bobot Kriteria Prestasi<span style="color:red;">*</span></label>
            <input type="text" name="kriteria_prestasi" class="form-control" id="kriteria_prestasi" placeholder="Kriteria Prestasi" value="<?= (set_value('kriteria_prestasi')) ? set_value('kriteria_prestasi') : $bobotkriteria['kriteria_prestasi']; ?>">
            <?= form_error('kriteria_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class=" form-group">
            <label for="kriteria_penghasilan">Bobot Kriteria Penghasilan<span style="color:red;">*</span></label>
            <input type="text" name="kriteria_penghasilan" class="form-control" id="kriteria_penghasilan" placeholder="Kriteria Penghasilan" value="<?= (set_value('kriteria_penghasilan')) ? set_value('kriteria_penghasilan') : $bobotkriteria['kriteria_penghasilan']; ?>">
            <?= form_error('kriteria_penghasilan', '<small class="text-danger pl-3">', '</small>'); ?>
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