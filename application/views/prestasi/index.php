<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mg-4">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="h3 mb-2 text-gray-800"><?= $title; ?></h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?= base_url('prestasi/prestasi_tambah'); ?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</a>
                <?php echo $this->session->flashdata('message'); ?>
                <p></p>
                <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA PRESTASI</th>
                    <th>JENIS PRESTASI</th>
                    <th>TINGKAT</th>
                    <th>SKOR</th>
                    <th>TAHUN USULAN</th>
                    <th>JENIS BEASISWA</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if (empty($prestasi)) : ?>
                        <div class="alert alert-danger" role="alert">
                        Data Prestasi tidak berhasil ditemukan
                        </div>
                        <?php endif; ?>
                        <?php $i = 1; ?>
                        <?php foreach ($prestasi as $prst) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $prst['nim']; ?></td>
                        <td><?= $prst['nama']; ?></td>
                        <td><?= $prst['jenis']; ?></td>
                        <td><?= $prst['tingkat']; ?></td>
                        <td><?= $prst['skor']; ?></td>
                        <td><?= $prst['tahun']; ?></td>
                        <td><?= $prst['jenis_beasiswa']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>prestasi/prestasi_view/<?= $prst['id_data_prestasi']; ?>" class="btn btn-success" title="Detail Data"><i class="fas fa-info-circle"></i></a>
                            <a href="<?= base_url(); ?>prestasi/prestasi_edit/<?= $prst['id_data_prestasi']; ?>" class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url(); ?>prestasi/prestasi_delete/<?= $prst['id_data_prestasi']; ?>" class="btn btn-warning" title="Delete Data" onclick="return confirm('Apakah anda akan menghapus data ini?');"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              </div>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.col -->
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

  
