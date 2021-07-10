<div class="col-md-12 col-md-offset-1 well">
  <div class="p-2">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="mt-3 text-center">Tambah <?= $title ;?></h3>
  </div>
  <form id="form-tambah-kategori" method="POST">
    <div class="row">
        <div class="card-body">
            <div class="form-group">
                <label><?= $title ;?></label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-layer-group"></i>
                    </div>
                </div>
                <input type="text" placeholder="<?= $title ;?>" class="form-control" name="kategori" id="kategori">
                <div class="invalid-feedback invalid-msg">
                    
                </div>  
              </div>
            </div>
        </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary" id="submit">Tambah <?= $title ;?></button>
      </div>
    </div>
  </form>
</div>
