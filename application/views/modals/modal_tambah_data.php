<div class="col-md-12 col-md-offset-1 well">
  <div class="p-2">
    <button type="button" class="close my-2 text-center" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="mt-3 text-center">Tambah <?= $title;?></h3>
  </div>
  <form id="form-tambah-data" method="POST">
    <div class="row">
        <div class="card-body">
            <?php 
                if($title == "Pemasukan Masjid"){
            ?>

            <input type="hidden" value="1" name="kat" id="kat">

            <?php } 
                elseif($title == "Pengeluaran Masjid"){ 
            ?>

            <input type="hidden" value="2" name="kat" id="kat">

            <?php } ?>
            <div class="form-group">
                <label>No. Kwitansi</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="far fa-file-alt"></i>
                    </div>
                </div>
                <input type="text" placeholder="Nomor Kwitansi" class="form-control" name="nomor" id="nomor">
                <div class="invalid-feedback no-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
                <input type="text" placeholder="Tanggal" class="form-control" name="tanggal" id="tanggal">
                <div class="invalid-feedback tgl-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-list-ul"></i>
                    </div>
                </div>
                <select class="form-control" name="kategori" id="kategori">
                  <option value="" disabled selected>Kategori</option>
                    <?php
                      foreach ($kategori as $d) {
                        ?>
                        <option value="<?php echo $d['id']; ?>" >
                          <?php echo $d['kategori']; ?>
                          </option>
                        <?php
                      }
                    ?>
                </select>
                <div class="invalid-feedback kat-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Jumlah (Rp)</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-wallet"></i>
                    </div>
                </div>
                <input type="text" placeholder="Jumlah Uang" class="form-control" name="jumlah" id="jumlah">
                <div class="invalid-feedback jlh-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-quote-left"></i>
                    </div>
                </div>
                <input type="text" placeholder="Keterangan" class="form-control" name="keterangan" id="keterangan">
                <div class="invalid-feedback ket-msg">
                    
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary" id="submit">Tambah Data</button>
      </div>
    </div>
  </form>
</div>