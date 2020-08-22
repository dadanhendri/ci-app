<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css'; ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Data Pasien</h1>

				<a href="#form" data-toggle="modal" class="btn btn-primary">Tambah Data</a>

				<table class="table table-hover table-border table-sm">
					<thead class="bg-danger">
						<tr>
							<th>No</th>
							<th>No RM</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>No Telp</th>
						</tr>
					</thead>
					<tbody id="tabel-pasien">
						<!-- isi table -->
					</tbody>
				</table>	
				
				<!-- Modal untuk tambah data -->
				<div class="modal fade" id="form" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Data Pasien</h5>
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="">
									<div class="form-group row">
										<label for="norm" class="col-sm-3 col-form-label">No RM</label>
										<div class="col-sm-5">
											<input type="text" name="norm" id="norm" placeholder="No Rekam Medis" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-sm-3 col-form-label">Nama</label>
										<div class="col-sm-9">
											<input type="text" name="nama" id="nama" placeholder="masukan nama" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-9">
											<input type="text" name="alamat" id="alamat" placeholder="masukan alamat" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="notelp" class="col-sm-3 col-form-label">No Telp</label>
										<div class="col-sm-9">
											<input type="text" name="notelp" id="notelp" placeholder="masukan nomor telp" class="form-control">
										</div>
									</div>

								</form>
								
							</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
							
						</div>
					</div>
					
				</div>
				<!--akhir modal -->



			</div>
		</div>
	</div>


	<script src="<?php echo base_url(). 'assets/js/jquery-3.5.1.min.js'; ?>"></script>
	<script src="<?php echo base_url(). 'assets/js/bootstrap.js' ?>"></script>
	<script>
		$(document).ready(function(){
			ambilData();

			function ambilData(){
				$.ajax({
					type:'post',
					url: '<?php echo base_url()."pasien/ambilData" ?>',
					dataType:'json',
					success: function(result){
						var html = '';
						var no = 1;
						$.each(result, function(i,data){
							html +='<tr>'+
										'<td>'+no+'</td>'+
										'<td>'+data.no_rekam_medis+'</td>'+
										'<td>'+data.nama_pasien+'</td>'+
										'<td>'+data.alamat+'</td>'+
										'<td>'+data.no_telp_pasien+'</td>'+
									'</tr>';
							no++;
						});

						$('#tabel-pasien').html(html);
					}
				});
			}

		});
	</script>
	
</body>
</html>	