<script>
	// daterangepicker
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
	
	// DataTables
    // $(document).ready(function() {
        var table = $('#dataTable').DataTable({
            // buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
			pageLength : 5,
            dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            columnDefs: [{
                "targets": -1,
                "orderable": false,
                "searchable": false
            }]
        });
        // table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
    // });

	function refresh() {
		location.reload(false);
	}
	
	$('#form-tambah-data').submit(function(e) {
		$.ajax({
			type: 'POST',
			url: '<?= base_url("Kas/tambah"); ?>',
			data: {
				"kat": $('#kat').val(),
				"nomor": $('#nomor').val(), 
				"tanggal": $('#tanggal').val().split('-').reverse().join('-'),
				"kategori": $('#kategori').val(),
				"jumlah": $('#jumlah').val(),
				"keterangan": $('#keterangan').val()
			},
		})
		.done(function(data) {
			var out = JSON.parse(data);

			if (out.status == 'form') {
				$('.no-msg').html(out.nomor_error);
				$('.tgl-msg').html(out.tanggal_error);
				$('.kat-msg').html(out.kategori_error);
				$('.jlh-msg').html(out.jumlah_error);
				$('.ket-msg').html(out.keterangan_error);
				
				$('#nomor').each(function(){
					if (out.nomor_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})
				
				$('#tanggal').each(function(){
					if (out.tanggal_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				$('#kategori').each(function(){
					if (out.kategori_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				$('#jumlah').each(function(){
					if (out.jumlah_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				$('#keterangan').each(function(){
					if (out.keterangan_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				effect_msg_form();
			} else {
				document.getElementById("form-tambah-data").reset();
				$('#tambah-data').modal('hide');
            	swal("Berhasil!", "Data berhasil ditambahkan!", "success")
				.then(function(){ 
					refresh();
				})
			}
		});
		e.preventDefault();
	});

	$(document).on("click", ".editData", function() {		
		$.ajax({
			method: "POST",
			url: "<?= base_url('kas/update'); ?>",
			data: {
				"id": $(this).attr("data-id"),
				"title": $(this).attr("data-title")
			}
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-data').modal('show');
		})
	})

	$(document).on('submit', '#form-update-data', function(e){
		$.ajax({
			type: 'POST',
			url: '<?= base_url("kas/prosesUpdate"); ?>',
			data: {
				"kat": $('#kat').val(),
				"id": $('#id').val(),
				"nomor": $('#u_nomor').val(),
				"tanggal": $('#u_tanggal').val().split('-').reverse().join('-'),
				"kategori": $('#u_kategori').val(),
				"jumlah": $('#u_jumlah').val(),
				"keterangan": $('#u_keterangan').val()
			}
		})
		.done(function(data) {
			var out = JSON.parse(data);

			if (out.status == 'form') {
				$('.no-msg').html(out.nomor_error);
				$('.tgl-msg').html(out.tanggal_error);
				$('.kat-msg').html(out.kategori_error);
				$('.jlh-msg').html(out.jumlah_error);
				$('.ket-msg').html(out.keterangan_error);
				
				$('#u_nomor').each(function(){
					if (out.nomor_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})
				
				$('#u_tanggal').each(function(){
					if (out.tanggal_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				$('#u_kategori').each(function(){
					if (out.kategori_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				$('#u_jumlah').each(function(){
					if (out.jumlah_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				$('#u_keterangan').each(function(){
					if (out.keterangan_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				})

				effect_msg_form();
			} else {
				document.getElementById("form-update-data").reset();
				$('#update-data').modal('hide');
            	swal("Berhasil!", "Data telah diedit!", "success")
				.then(function(){ 
					refresh();
				})
			}
		});
		e.preventDefault();
	});

	let id_data;
	let title_data;
	$(document).on("click", ".hapusData-kas", function() {
		id_data = $(this).attr("data-id");
		title_data = $(this).attr("data-title");
	})
	
	$(document).on("click", ".hapus-dataKas", function() {
		let id = id_data;
		let title = title_data;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kas/hapus_data'); ?>",
			data: {
				"id": id,
				"title": title
			}
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			swal('Berhasil', 'Data berhasil dihapus', 'error')
			.then(function(){ 
				refresh();
			})
		})
	})

	$('#form-tambah-kategori').submit(function(e) {
		$.ajax({
			method: 'POST',
			url: '<?= base_url('konfigurasi/tambah_kategori'); ?>',
			data: {
				"kategori" : $('#kategori').val()
			}
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			if (out.status == 'form') {
				$('.invalid-msg').html(out.ada_error);
				
				$('#kategori').each(function(){
					if (out.ada_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				}) 
			} else {
				document.getElementById("form-tambah-kategori").reset();
				$('#tambah-kategori').modal('hide');
            	swal("Berhasil!", "Data berhasil ditambahkan!", "success")
				.then(function(){ 
					refresh();
				})
			}
		})
		e.preventDefault();
	});

	$(document).on("click", ".editConfig", function() {		
		$.ajax({
			method: "POST",
			url: "<?= base_url('konfigurasi/update'); ?>",
			data: {
				"id": $(this).attr("data-id"),
			}
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#edit-kategori').modal('show');
		})
	})

	$(document).on('submit', '#form-konfigurasi', function(e){
		$.ajax({
			method: 'POST',
			url: '<?= base_url('konfigurasi/prosesUpdate'); ?>',
			data: {
				"id" : $('#id').val(),
				"kategori" : $('#u_kategori').val()
			}
		})
		.done(function(data) {
			var out = JSON.parse(data);

			if (out.status == 'form') {
				$('.invalid-msg').html(out.ada_error);
				
				$('#u_kategori').each(function(){
					if (out.ada_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				}) 
			} else {
				document.getElementById("form-konfigurasi").reset();
				$('#editConfig').modal('hide');
            	swal("Berhasil!", "Data telah diedit!", "success")
				.then(function(){ 
					refresh();
				})
			}
		})
		e.preventDefault();
	});

	var id_kategori;
	$(document).on("click", ".konfirmasiHapus-kategori", function() {
		id_kategori = $(this).attr("data-id");
	})

	$(document).on("click", ".hapusKategori", function() {
		var id = id_kategori;
		
		$.ajax({
			method: "POST",
			url: "<?= base_url('konfigurasi/hapus_kategori'); ?>",
			data: {id : id}
		})
		.done(function(data) {
			$('#hapusKategori').modal('hide');
			$('.msg').html(data);
			swal('Berhasil', 'Data berhasil dihapus', 'error')
			.then(function(){ 
				refresh();
			})
		})
	})

	$(document).on('submit', '#form-gantiNama', function(e){
		$.ajax({
			method: 'POST',
			url: '<?= base_url('dashboard/gantiNama'); ?>',
			data: {
				"id" : $('#id_masjid').val(),
				"masjid" : $('#masjid').val()
			}
		})
		.done(function(data) {
			var out = JSON.parse(data);

			if (out.status == 'form') {
				$('.masjid-msg').html(out.masjid_error);
				
				$('#masjid').each(function(){
					if (out.masjid_error) {
						$(this).addClass('is-invalid');
					}
					else{
						$(this).removeClass('is-invalid');
					}
				}) 
			} else {
				document.getElementById("form-gantiNama").reset();
            	swal("Berhasil!", "Nama masjid telah diganti", "success")
				.then(function(){ 
					refresh();
				})
			}
		})
		e.preventDefault();
	});
</script>