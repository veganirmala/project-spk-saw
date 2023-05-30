<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="" method="POST">
        <input type="hidden" name="id_ipk" id="id_ipk" value="<?= $IPK['id_ipk']; ?>">
            <div class=" form-group">
                <label for="nim">NIM<span style="color:red;">*</span></label>
                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="<?= (set_value('nim')) ? set_value('nim') : $IPK['nim']; ?>">
                <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class=" form-group">
                <label for="ipk">IPK<span style="color:red;">*</span></label>
                <input type="text" name="ipk" class="form-control" id="ipk" placeholder="IPK" value="<?= (set_value('ipk')) ? set_value('ipk') : $IPK['ipk']; ?>">
                <?= form_error('ipk', '<small class="text-danger pl-3">', '</small>'); ?>
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