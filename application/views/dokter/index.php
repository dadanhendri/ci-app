<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1>Data Dokter</h1>
			<a class="btn btn-primary" href="<?= base_url().'dokter/tambah' ?>" >Tambah Data Dokter</a>
			<ul class="list-group">
			<?php foreach($dokter as $dr): ?>
				<li class="list-group-item">
					<?= $dr['nama_dokter']; ?>
					<a href="" class="badge badge-primary float-right">Ubah</a>					
				</li>
			<?php endforeach; ?> 
			</ul>
		</div>
	</div>
</div>