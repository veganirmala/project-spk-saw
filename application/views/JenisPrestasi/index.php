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
                <a href="<?= base_url('JenisPrestasi/jenisprestasi_tambah'); ?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</a>
                <?php echo $this->session->flashdata('message'); ?>
                <p></p>
                <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>JENIS</th>
                    <th>TINGKAT</th>
                    <th>NILAI</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if (empty($jenisprestasi)) : ?>
                        <div class="alert alert-danger" role="alert">
                        Data Jenis Beasiswa tidak berhasil ditemukan
                        </div>
                        <?php endif; ?>
                        <?php $i = 1; ?>
                        <?php foreach ($jenisprestasi as $jnsprestasi) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $jnsprestasi['nama']; ?></td>
                        <td><?= $jnsprestasi['jenis']; ?></td>
                        <td><?= $jnsprestasi['tingkat']; ?></td>
                        <td><?= $jnsprestasi['nilai']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>jenisprestasi/jenisprestasi_view/<?= $jnsprestasi['id_jenis_prestasi']; ?>" class="btn btn-success" title="Detail Data"><i class="fas fa-info-circle"></i></a>
                            <a href="<?= base_url(); ?>jenisprestasi/jenisprestasi_edit/<?= $jnsprestasi['id_jenis_prestasi']; ?>" class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url(); ?>jenisprestasi/jenisprestasi_delete/<?= $jnsprestasi['id_jenis_prestasi']; ?>" class="btn btn-warning" title="Delete Data" onclick="return confirm('Apakah anda akan menghapus data ini?');"><i class="fas fa-trash-alt"></i></a>
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

  
