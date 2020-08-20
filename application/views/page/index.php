<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center">Data Pasien</h1>

				<table class="table table-striped table-hover">
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
					<?php foreach ($pasien as $psn) : ?>
						<tr>
							<td><?php echo ++$star; ?></td>
							<td><?php echo $psn['medrec_lama']; ?></td>
							<td><?php echo $psn['nama_pasien']; ?></td>
							<td><?php echo $psn['tempat_lahir']; ?></td>
							<td><?php echo $psn['tanggal_lahir_pasien']; ?></td>
							<td><?php echo $psn['alamat_pasien']; ?></td>
							<td><?php echo $psn['no_telepon_pasien']; ?></td>
							<td><?php echo $psn['no_hp']; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
</body>

</html>