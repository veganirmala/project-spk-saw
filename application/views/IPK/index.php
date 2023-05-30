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
                <a href="<?= base_url('IPK/IPK_tambah'); ?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</a>
                <?php echo $this->session->flashdata('message'); ?>
                <p></p>
                <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>IPK</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if (empty($IPK)) : ?>
                        <div class="alert alert-danger" role="alert">
                        Data IPK tidak berhasil ditemukan
                        </div>
                        <?php endif; ?>
                        <?php $i = 1; ?>
                        <?php foreach ($IPK as $ipk) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $ipk['nim']; ?></td>
                        <td><?= $ipk['ipk']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>IPK/IPK_view/<?= $ipk['id_ipk']; ?>" class="btn btn-success" title="Detail Data"><i class="fas fa-info-circle"></i></a>
                            <a href="<?= base_url(); ?>IPK/IPK_edit/<?= $ipk['id_ipk']; ?>" class="btn btn-danger" title="Edit Data"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url(); ?>IPK/IPK_delete/<?= $ipk['id_ipk']; ?>" class="btn btn-warning" title="Delete Data" onclick="return confirm('Apakah anda akan menghapus data ini?');"><i class="fas fa-trash-alt"></i></a>
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

  
