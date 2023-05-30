<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <h3><?= $title; ?></h3>
        <div class="card mb-3 col-lg-8" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                    <h4 class="card-title">NIM</h4>
                    <p class="card-text"><?= $prestasi['nim']; ?></p>
                    <h4 class="card-title">Nama Prestasi</h4>
                    <p class="card-text"><?= $prestasi['nama']; ?></p>
                    <h4 class="card-title">Jenis Prestasi</h4>
                    <p class="card-text"><?= $prestasi['jenis']; ?></p>
                    <h4 class="card-title">Tingkat Prestasi</h4>
                    <p class="card-text"><?= $prestasi['tingkat']; ?></p>
                    <h4 class="card-title">Nilai</h4>
                    <p class="card-text"><?= $prestasi['nilai']; ?></p>
                    <h4 class="card-title">Tahun Usulan</h4>
                    <p class="card-text"><?= $prestasi['tahun']; ?></p>
                    <h4 class="card-title">Jenis Beasiswa</h4>
                    <p class="card-text"><?= $prestasi['jenis_beasiswa']; ?></p>
                    </div>
                </div>
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