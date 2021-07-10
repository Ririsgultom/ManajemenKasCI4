<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main Content -->

  <section class="section">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow">
          <div class="card-icon bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pemasukan</h4>
            </div>
            <div class="card-body">
              <?= substr(strrev(chunk_split(strrev($total_masuk->total),3, '.')), 1); ?>
            </div>
            <a href="<?= base_url('kas/masuk') ?>" class="text-small">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow">
          <div class="card-icon bg-danger">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengeluaran</h4>
            </div>
            <div class="card-body">
              <?= substr(strrev(chunk_split(strrev($total_keluar->total),3, '.')), 1); ?>
            </div>
            <a href="<?= base_url('kas/keluar') ?>" class="text-small">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow">
          <div class="card-icon bg-success">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pemasukan Bulan Ini</h4>
            </div>
            <div class="card-body">
              <?= substr(strrev(chunk_split(strrev($pemasukan_bulan),3, '.')), 1); ?>
            </div>
            <p class="text-small">(<?= tgl_indonesia(date("Y-m")) ;?>)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow">
          <div class="card-icon bg-warning">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 style="font-size:12px">Pengeluaran Bulan Ini</h4>
            </div>
            <div class="card-body">
              <?= substr(strrev(chunk_split(strrev($pengeluaran_bulan),3, '.')), 1); ?>
            </div>
            <p class="text-small">(<?= tgl_indonesia(date("Y-m")) ;?>)</p>
          </div>
        </div>
      </div>
    </div>
  </section>