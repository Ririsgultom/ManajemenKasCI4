<div class="col-md-12 col-md-offset-1 well">
  <div class="p-2">
    <button type="button" class="close my-2 text-center" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="mt-3 text-center">Update <?= $title ;?></h3>
  </div>
  <form id="form-update-data" method="POST">
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
            <input type="hidden" name="id" id="id" value="<?= $dataKas['id']; ?>">
            <div class="form-group">
                <label>No. Kwitansi</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-user"></i>
                    </div>
                </div>
                <input type="text" placeholder="nomor" class="form-control" name="nomor" id="u_nomor" value="<?= $dataKas['nomor']; ?>" disabled>
                <div class="invalid-feedback no-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-id-card"></i>
                    </div>
                </div>
                <input type="text" placeholder="tanggal" class="form-control" name="tanggal" id="u_tanggal" value="<?= date('d-m-Y', strtotime($dataKas['tanggal'])); ?>">
                <div class="invalid-feedback tgl-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-id-card"></i>
                    </div>
                </div>
                <input type="text" placeholder="kategori" class="form-control" name="kategori" id="u_kategori" value="<?= $dataKas['kategori']; ?>">
                <div class="invalid-feedback kat-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Jumlah (Rp)</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-at"></i>
                    </div>
                </div>
                <input type="text" placeholder="jumlah" class="form-control" name="jumlah" id="u_jumlah" value="<?= $dataKas['jumlah']; ?>">
                <div class="invalid-feedback jlh-msg">
                    
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <i class="fas fa-at"></i>
                    </div>
                </div>
                <input type="text" placeholder="keterangan" class="form-control" name="keterangan" id="u_keterangan" value="<?= $dataKas['keterangan']; ?>">
                <div class="invalid-feedback ket-msg">
                    
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

<script type="text/javascript">
    $(function() {
        $('input[name="tanggal"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timeZone: 'Asia/Jakarta',
            locale: {
                format: 'DD-MM-YYYY',
                monthNames: [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                ],
                daysOfWeek: [
                    "Min",
                    "Sen",
                    "Sel",
                    "Rab",
                    "Kam",
                    "Jum",
                    "Sab"
                ],
            },
        });
    });
</script>