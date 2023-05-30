<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="" method="POST">
        <input type="hidden" name="id_data_prestasi" id="id_data_prestasi" value="<?= $prestasi['id_data_prestasi']; ?>">
            <div class=" form-group">
                <label for="nim">NIM<span style="color:red;">*</span></label>
                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="<?= (set_value('nim')) ? set_value('nim') : $prestasi['nim']; ?>">
                <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">Nama Prestasi<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jenis_prestasi" value="<?= set_value('id_jenis_prestasi'); ?>">
            <option value="<?php echo $prestasi['id_jenis_prestasi']; ?>"><?php echo $prestasi['nama']; ?></option>        
            <?php foreach ($jenisprestasi as $j) : ?>
                    <option value="<?php echo $j['id_jenis_prestasi']; ?>"><?php echo $j['nama']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_jenis_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">Juara<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jenis_prestasi" value="<?= set_value('id_jenis_prestasi'); ?>">
            <option value="<?php echo $prestasi['id_jenis_prestasi']; ?>"><?php echo $prestasi['jenis']; ?></option>    
                <?php foreach ($jenisprestasi as $j) : ?>
                    <option value="<?php echo $j['id_jenis_prestasi']; ?>"><?php echo $j['jenis']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_jenis_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">Tingkat<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jenis_prestasi" value="<?= set_value('id_jenis_prestasi'); ?>">
            <option value="<?php echo $prestasi['id_jenis_prestasi']; ?>"><?php echo $prestasi['tingkat']; ?></option>    
                <?php foreach ($jenisprestasi as $j) : ?>
                    <option value="<?php echo $j['id_jenis_prestasi']; ?>"><?php echo $j['tingkat']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_jenis_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class=" form-group">
                <label for="skor">Skor<span style="color:red;">*</span></label>
                <input type="text" name="skor" class="form-control" id="skor" placeholder="Skor Prestasi" value="<?= (set_value('skor')) ? set_value('skor') : $prestasi['skor']; ?>">
                <?= form_error('skor', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">Tahun<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_usulan" value="<?= set_value('id_usulan'); ?>">
            <option value="<?php echo $prestasi['id_usulan']; ?>"><?php echo $prestasi['tahun']; ?></option>       
            <?php foreach ($usulan as $j) : ?>
                    <option value="<?php echo $j['id_usulan']; ?>"><?php echo $j['tahun']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_usulan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">Jenis Beasiswa<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jenis_beasiswa" value="<?= set_value('id_jenis_beasiswa'); ?>">
            <option value="<?php echo $prestasi['id_jenis_beasiswa']; ?>"><?php echo $prestasi['jenis_beasiswa']; ?></option>       
                <?php foreach ($usulan as $j) : ?>
                    <option value="<?php echo $j['id_jenis_beasiswa']; ?>"><?php echo $j['jenis_beasiswa']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_jenis_beasiswa', '<small class="text-danger pl-3">', '</small>'); ?>
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