<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="" method="POST">
        <input type="hidden" name="id_prodi" id="id_prodi" value="<?= $prodi['id_prodi']; ?>">
        <div class="form-group">
            <label for="id_jurusan">Nama Jurusan<span style="color:red;">*</span></label>
            <select class="form-control" tabindex="-1" aria-hidden="true" name="id_jurusan" value="<?= set_value('id_jurusan'); ?>">
            <option value="<?php echo $prodi['id_jurusan']; ?>"><?php echo $prodi['nama_jurusan']; ?></option>
                <?php foreach ($jurusan as $j) : ?>
                    <option value="<?php echo $j['id_jurusan']; ?>"><?php echo $j['nama_jurusan']; ?></option>
                <?php endforeach; ?>
            </select><?= form_error('id_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class=" form-group">
            <label for="nama_prodi">Nama Prodi<span style="color:red;">*</span></label>
            <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" placeholder="Nama Prodi" value="<?= (set_value('nama_prodi')) ? set_value('nama_prodi') : $prodi['nama_prodi']; ?>">
            <?= form_error('nama_prodi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="jenjang">Jenjang<span style="color:red;">*</span></label>
                <select class="form-control" tabindex="-1" aria-hidden="true" name="jenjang" value="<?= (set_value('jenjang')) ? set_value('jenjang') : $prodi['jenjang']; ?>">
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                </select>
                <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
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