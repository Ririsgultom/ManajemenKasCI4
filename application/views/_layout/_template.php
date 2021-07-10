<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <?php echo @$_meta; ?>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/favicon/favicon.ico">

    <title><?= $title; ?> | Manajemen Kas <?= $masjid; ?></title>

    <!-- css -->
    <?php echo @$_css; ?>
    
</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    
    <!-- Navbar -->
    <?php echo @$_nav; ?>

    <!-- Sidebar -->
    <?php echo @$_sidebar; ?>

    <!-- Begin Page Content -->
    <div class="main-content">

      <?php echo @$_content; ?>

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php echo @$_footer; ?>

    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Klik "Logout" dibawah ini jika anda yakin ingin logout.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                  <a class="btn btn-primary" href="<?php echo base_url(); ?>Auth/logout">Logout</a>
              </div>
          </div>
      </div>
  </div>

    <div class="modal fade" id="edit_nama" role="dialog">
        <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="col-md-12 col-md-offset-1 well">
                <div class="p-2">
                    <button type="button" class="close my-2 text-center" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="mt-3 text-center">Ganti Nama Masjid</h3>
                </div>
                <form id="form-gantiNama" method="POST">
                    <div class="row">
                        <div class="card-body">
                            <input type="hidden" name="id_masjid" id="id_masjid" value="<?= $id; ?>">
                            <div class="form-group">
                                <label>Nama Masjid</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-mosque"></i>
                                    </div>
                                </div>
                                <input type="text" placeholder="Nama Masjid" class="form-control" name="masjid" id="masjid" value="<?= $masjid; ?>">
                                <div class="invalid-feedback masjid-msg">
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn btn-primary" id="submit">Edit Nama</button>
                    </div>
                    </div>
                </form>
                </div>
        </div>
        </div>
    </div>

<div id="tempat-modal"></div>
  <!-- JS File -->
  <?php echo @$_js; ?>

</body>
</html>