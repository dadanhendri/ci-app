<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
	<h1 class="text-center">Data Pasien</h1>
	<table class="table table-hover table-border table-sm">
		<thead>
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