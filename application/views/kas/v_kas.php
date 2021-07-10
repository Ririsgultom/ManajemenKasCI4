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
                    <button class="form-control btn-sm btn-primary" data-toggle="modal" data-target="#tambah-data">
                        <span class="icon">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">
                            Tambah Data
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive" style="padding: 0 0.5rem;">
            <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable" style="padding: 10px; font-size: .9rem;">
                <thead>
                    <tr class="text-center">
                        <th># </th>
                        <th>No. Kwitansi</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Jumlah (Rp)</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($kas as $data) {
                            $jumlah = strrev(chunk_split(strrev($data['jumlah']),3, '.'));
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['nomor']; ?></td>
                            <td><?= tgl_indonesia($data['tanggal']); ?></td>
                            <td><?= $data['kategori']; ?></td>
                            <td><?= substr($jumlah, 1); ?></td>
                            <td><?= $data['keterangan']; ?></td>
                            <td class="text-center">
                                <button class="btn btn-icon icon-left btn-primary editData" data-id="<?= $data['id']; ?>" data-title="<?= $title ;?>" type="button" style="min-width: 5rem"><i class="fas fa-pen"></i>Edit</button>
                                <button class="btn btn-icon icon-left btn-danger hapusData-kas" data-id="<?= $data['id']; ?>" data-title="<?= $title ;?>" data-toggle="modal" data-target="#konfirmasiHapus" type="button" style="min-width: 5rem"><i class="fas fa-times"></i>Hapus</button>
                            </td>
                    <?php 
                            $no++;
                        }
                    ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

<?= $modal_tambah; ?>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataKas', 'Yakin ingin menghapus data?', 'Ya, hapus data'); ?>