<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <h3><?= $title; ?></h3>
        <div class="card mb-3 col-lg-8" style="max-width: 540px;">
            <div class="row no-gutters">
                <!-- awal kolom 1 -->
            <div class="col-md-6">
                <div class="col">
                    <div class="card-body">
                        <h4 class="card-title">NIM</h4>
                        <p class="card-text"><?= $mahasiswa['nim']; ?></p>
                        <h4 class="card-title">Nama Mahasiswa</h4>
                        <p class="card-text"><?= $mahasiswa['nama']; ?></p>
                        <h4 class="card-title">Jenis Kelamin Mahasiswa</h4>
                        <p class="card-text"><?= $mahasiswa['jk_mhs']; ?></p>
                        <h4 class="card-title">No HP Mahasiswa</h4>
                        <p class="card-text"><?= $mahasiswa['no_telp']; ?></p>
                        <h4 class="card-title">Alamat Mahasiswa</h4>
                        <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                        <h4 class="card-title">Nama Prodi</h4>
                        <p class="card-text"><?= $mahasiswa['id_prodi']; ?></p>
                        <h4 class="card-title">E-mail</h4>
                        <p class="card-text"><?= $mahasiswa['email']; ?></p>
                        <h4 class="card-title">Nama Ayah</h4>
                        <p class="card-text"><?= $mahasiswa['nama_ayah']; ?></p>
                        <h4 class="card-title">Pekerjaan Ayah</h4>
                        <p class="card-text"><?= $mahasiswa['pekerjaan_ayah']; ?></p>
                    </div>
                </div>
            </div>
            <!-- akhir kolom 1 -->
            <!-- awal kolom 2 -->
            <div class="col-md-6">
                <div class="col">
                    <div class="card-body">
                    <h4 class="card-title">Nama Ibu</h4>
                        <p class="card-text"><?= $mahasiswa['nama_ibu']; ?></p>
                        <h4 class="card-title">Pekerjaan Ibu</h4>
                        <p class="card-text"><?= $mahasiswa['pekerjaan_ibu']; ?></p>
                        <h4 class="card-title">Penghasilan Orang Tua</h4>
                        <p class="card-text"><?= "Rp " . number_format($mahasiswa['penghasilan_ortu']); ?></p>
                        <h4 class="card-title">Tanggungan Orang Tua</h4>
                        <p class="card-text"><?= $mahasiswa['tanggungan']; ?></p>
                        <h4 class="card-title">Nama Bank</h4>
                        <p class="card-text"><?= $mahasiswa['nama_bank']; ?></p>
                        <h4 class="card-title">No Rekening Bank</h4>
                        <p class="card-text"><?= $mahasiswa['norek_bank']; ?></p>
                        <h4 class="card-title">Semester</h4>
                        <p class="card-text"><?= $mahasiswa['semester']; ?></p>
                        <h4 class="card-title">Tahun Usulan</h4>
                        <p class="card-text"><?= $mahasiswa['tahun']; ?></p>
                    </div>
                </div>
            </div>
            <!-- akhir kolom 2 -->
            </div>
        </div>
        <button type="button" value="Kembali" onClick="history.go(-1)" class="btn btn-primary btn-user">
            Kembali
        </button>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>