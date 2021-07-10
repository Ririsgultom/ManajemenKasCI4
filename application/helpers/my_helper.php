<?php
	// MSG
	function show_msg($content='', $type='success', $icon='fa-info-circle', $size='14px') {
		if ($content != '') {
			return  '<p class="box-msg">
				      <div class="info-box alert-' .$type .'">
					      <div class="info-box-icon">
					      	<i class="fa ' .$icon .'"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' .$size .'">
				        	' .$content
				      	.'</div>
					  </div>
				    </p>';
		}
	}

	function show_succ_msg($content='', $size='14px') {
		if ($content != '') {
			"<script>
				showSwal = function(type) {
				'use strict';
				if (type === 'success-message') {
				swal({
				title: 'Congratulations!',
				text: 'You entered the correct answer',
				type: 'success',
				button: {
				text: 'Continue',
				value: true,
				visible: true,
				className: 'btn btn-primary'
				}

				}else{
				swal('Error occured !');
				}
				}

			</script>";
		}
	}

	function show_err_msg($content='') {
		if ($content != '') {
			return $content;
		}
	}

	// MODAL
	function show_my_modal($content='', $id='', $data='', $size='md') {
		$_ci = &get_instance();

		if ($content != '') {
			$view_content = $_ci->load->view($content, $data, TRUE);

			return '<div class="modal fade" id="' .$id .'" role="dialog">
					  <div class="modal-dialog modal-' .$size .'" role="document">
					    <div class="modal-content">
					        ' .$view_content .'
					    </div>
					  </div>
					</div>';
		}
	}

	function show_my_confirm($id='', $class='', $title='Konfirmasi', $yes = 'Ya', $no = 'Tidak') {
		$_ci = &get_instance();

		if ($id != '') {
			echo   '<div class="modal fade" id="' .$id .'" role="dialog">
					  <div class="modal-dialog modal-md" role="document">
					    <div class="modal-content">
					        <div class="col-md-12 col-md-offset-1 well">
  							 <div class="form-msg" style="padding: 1rem;">
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      <h4 style="text-align:center;">' .$title .'</h4>
							  <div class="row" style="padding-top: 1rem;">
								<div class="col-md-6">
									<button class="form-control btn btn-icon icon-left btn-primary ' .$class .'"><i class="fas fa-check"></i> ' .$yes .'</button>
								</div>
								<div class="col-md-6">
									<button class="form-control btn btn-icon icon-left btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> ' .$no .'</button>
								</div>
							  </div>
							 </div>
						    </div>
					    </div>
					  </div>
					</div>';
		}
	}
?>