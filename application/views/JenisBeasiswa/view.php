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
                        <h4 class="card-title">ID Jenis Beasiswa</h4>
                        <p class="card-text"><?= $jenisbeasiswa['id_jenis_beasiswa']; ?></p>
                        <h4 class="card-title">Jenis Beasiswa</h4>
                        <p class="card-text"><?= $jenisbeasiswa['jenis_beasiswa']; ?></p>
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