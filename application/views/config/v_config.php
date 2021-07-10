<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-auto mr-auto">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        <?= $title; ?>
                    </h4>
                </div>
                <div class="col-auto">
                    <button class="form-control btn-sm btn-primary" data-toggle="modal" data-target="#tambah-kategori">
                        <span class="icon">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">
                            Tambah <?= $title ;?>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive" style="padding: 0 0.5rem;">
            <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable" style="padding: 10px; font-size: .9rem;">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th><?= $title ;?></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach ($kategori as $data) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-icon icon-left btn-primary editConfig" data-id="<?= $data['id']; ?>" type="button" style="min-width: 5rem"><i class="fas fa-pen"></i>Edit</button>
                            <button class="btn btn-icon icon-left btn-danger konfirmasiHapus-kategori" data-id="<?php echo $data['id']; ?>" data-toggle="modal" data-target="#hapusKategori" type="button" style="min-width: 5rem"><i class="fas fa-times"></i>Hapus</button>
                        </td>
                    <?php
                        $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php echo $modal_tambah; ?>

<?php show_my_confirm('hapusKategori', 'hapusKategori', 'Yakin ingin hapus Kategori?', 'Ya, hapus kategori');
