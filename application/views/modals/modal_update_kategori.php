<div class="col-md-12 col-md-offset-1 well">
  <div class="p-2">
    <button type="button" class="close my-2 text-center" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="mt-3 text-center">Update <?= $title ;?></h3>
  </div>
  <form id="form-konfigurasi" method="POST">
    <div class="row">
        <div class="card-body">
            <input type="hidden" name="id" id="id" value="<?= $dataConfig['id']; ?>">
            <div class="form-group">
                <label><?= $title ;?></label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-layer-group"></i>
                    </div>
                </div>
                <input type="text" placeholder="<?= $title ;?>" class="form-control" name="kategori" id="u_kategori" value="<?= $dataConfig['kategori']; ?>">
                <div class="invalid-feedback invalid-msg">
                    
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary" id="submit">Edit Data</button>
      </div>
    </div>
  </form>
</div>