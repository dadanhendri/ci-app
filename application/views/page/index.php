<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js'; ?>"></script>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center">Data Pasien</h1>

				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>No RM</th>
							<th>Nama Pasien</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>No Telp</th>
							<th>No HP</th>
						</tr>						
					</thead>
					<tbody>
						
					</tbody>
				</table>
				<!-- <?php echo $this->pagination->create_links(); ?> -->
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(). 'assets/js/bootstrap.js' ?>"></script>
	<script>
		
	ambilData();

	function ambilData(){
		$.ajax({
			type: 'post',
			url: '<?php echo base_url()."page/ambilData"?>',
			dataType: 'json',
			success: function(data){
				var baris = '';
				var no = 1;
				$.each(data, function(i,data){
					baris+= '<tr>'+
								'<td>'+ no +'</td>'+
								'<td>'+ data.medrec_lama +'</td>'+
								'<td>'+ data.nama_pasien +'</td>'+
								'<td>'+ data.tempat_lahir +'</td>'+
								'<td>'+ data.tanggal_lahir_pasien +'</td>'+
								'<td>'+ data.alamat_pasien +'</td>'+
								'<td>'+ data.no_telepon_pasien +'</td>'+
								'<td>'+ data.no_hp +'</td>'+
							'</tr>';
					no++;
				});
				$('tbody').html(baris);
			}
		});
	}
	</script>
</body>

</html>