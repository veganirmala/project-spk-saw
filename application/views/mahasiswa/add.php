<<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h3><?= $title; ?></h3>
        <form action="<?= base_url('mahasiswa/mahasiswa_tambah'); ?>" method="POST">
        <div class="row">
            <!-- awal kolom 1 -->
            <div class="col-md-6">
                <div class="col">
                    <div class="form-group">
                        <label for="nim">NIM<span style="color:red;">*</span></label>
                        <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="<?= set_value('nim'); ?>">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa<span style="color:red;">*</span></label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mahasiswa" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jk_mhs">Jenis Kelamin</label>
                        <br>
                        <input type="radio" id="perempuan" name="jk_mhs" value="Perempuan" <?php echo set_radio('jk_mhs', 'Perempuan', TRUE); ?>>
                        <label>Perempuan</label>
                        <br>
                        <tr><input type="radio" id="laki-laki" name="jk_mhs" value="Laki-laki" <?php echo set_radio('jk_mhs', 'Laki-laki', TRUE); ?>>
                            <label>Laki-laki</label>
                        </tr>
                        <br>
                        <?= form_error('jk_mhs', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_prodi">Nama Prodi<span style="color:red;">*</span></label>
                        <select class="form-control" tabindex="-1" aria-hidden="true" name="id_prodi" value="<?= set_value('id_prodi'); ?>">
                            <?php foreach ($prodi as $p) : ?>
                                <option value="<?php echo $p['id_prodi']; ?>"><?php echo $p['nama_prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('id-prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="email">E-mail<span style="color:red;">*</span></label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="***@gmail.com" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telepon<span style="color:red;">*</span></label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No HP Mahasiswa" value="<?= set_value('no_telp'); ?>">
                        <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Mahasiswa<span style="color:red;">*</span></label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Mahasiswa" value="<?= set_value('alamat'); ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" value="<?= set_value('nama_ayah'); ?>">
                        <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?= set_value('pekerjaan_ayah'); ?>">
                        <?= form_error('pekerjaan_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <!-- akhir kolom 1 -->
            <!-- awal kolom 2 -->
            <div class="col-md-6">
                <div class="col">
                <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" value="<?= set_value('nama_ibu'); ?>">
                        <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?= set_value('pekerjaan_ibu'); ?>">
                        <?= form_error('pekerjaan_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggungan">Tanggungan Orang Tua<span style="color:red;">*</span></label>
                        <input type="text" name="tanggungan" class="form-control" id="tanggungan" placeholder="Tanggungan Orang Tua" value="<?= set_value('tanggungan'); ?>">
                        <?= form_error('tanggungan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ortu">Penghasilan Orang Tua<span style="color:red;">*</span></label>
                        <input type="text" name="penghasilan_ortu" class="form-control" id="penghasilan_ortu" placeholder="Penghasilan Orang Tua" value="<?= set_value('penghasilan_ortu'); ?>">
                        <?= form_error('penghasilan_ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_bank">Nama Bank<span style="color:red;">*</span></label>
                        <input type="text" name="nama_bank" class="form-control" id="nama_bank" placeholder="Nama Bank" value="<?= set_value('nama_bank'); ?>">
                        <?= form_error('nama_bank', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="norek_bank">No Rekening Bank<span style="color:red;">*</span></label>
                        <input type="text" name="norek_bank" class="form-control" id="norek_bank" placeholder="No Rekening Bank" value="<?= set_value('norek_bank'); ?>">
                        <?= form_error('norek_bank', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester<span style="color:red;">*</span></label>
                        <select class="form-control" tabindex="-1" aria-hidden="true" name="semester" value="<?= set_value('semester'); ?>">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                        <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_usulan">Tahun Usulan</label>
                        <select class="form-control" tabindex="-1" aria-hidden="true" name="id_usulan" value="<?= set_value('id_usulan'); ?>">
                            <?php foreach ($thusulan as $th) : ?>
                                <option value="<?php echo $th['id_usulan']; ?>"><?php echo $th['tahun']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('id_usulan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <!-- akhir kolom 2 -->
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
    var rupiah = document.getElementById('penghasilan_ortu');
    penghasilan_ortu.addEventListener('keyup', function(e) {
        //tambahkan 'Rp.' pada saat form di ketik
        //gunakan fungsi formatRupiah() untuk mengubah angka yang diketik menjadi format angka
        penghasilan_ortu.value = formatRupiah(this.value, 'Rp.');
    });

    /* fungsi formatRupiah() */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        //tambahkan titik jika yang diinput sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

<script type="text/javascript">
    var notelp = document.getElementById('no_telp');
    notelp.addEventListener('keyup', function(e) {
        var number_string = this.value.replace(/[^,\d]/g, '').toString()
        //gunakan fungsi formatnotelp() untuk mengubah angka yang diketik menjadi format angka
        notelp.value = number_string;
    });
</script>