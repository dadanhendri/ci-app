<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1>Data Dokter</h1>
			<button class="btn btn-success mb-3">Tambah Data Dokter</button>
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