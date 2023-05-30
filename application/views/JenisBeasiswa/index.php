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
                <a href="<?= base_url('JenisBeasiswa/jenisbeasiswa_tambah'); ?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</a>
                <?php echo $this->session->flashdata('message'); ?>
                <p></p>
                <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA JENIS BEASISWA</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if (empty($jenisbeasiswa)) : ?>
                        <div class="alert alert-danger" role="alert">
                        Data Jenis Beasiswa tidak berhasil ditemukan
                        </div>
                        <?php endif; ?>
                        <?php $i = 1; ?>
                        <?php foreach ($jenisbeasiswa as $jnsbeasiswa) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $jnsbeasiswa['jenis_beasiswa']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>jenisbeasiswa/jenisbeasiswa_view/<?= $jnsbeasiswa['id_jenis_beasiswa']; ?>" class="btn btn-success" title="Detail Data"><i class="fas fa-info-circle"></i></a>
                            <a href="<?= base_url(); ?>jenisbeasiswa/jenisbeasiswa_edit/<?= $jnsbeasiswa['id_jenis_beasiswa']; ?>" class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url(); ?>jenisbeasiswa/jenisbeasiswa_delete/<?= $jnsbeasiswa['id_jenis_beasiswa']; ?>" class="btn btn-warning" title="Delete Data" onclick="return confirm('Apakah anda akan menghapus data ini?');"><i class="fas fa-trash-alt"></i></a>
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

  
