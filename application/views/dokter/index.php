<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1>Data Dokter</h1>
			<a class="btn btn-primary" href="<?= base_url().'dokter/tambah' ?>" >Tambah Data Dokter</a>
			<?php if($this->session->flashdata('flash')): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<form action="" method="post">
				<div class="input-group mb-3">
				  <input type="text" name="keyword" id="btn-cari" class="form-control" placeholder="Masukan data pencarian" aria-label="Masukan data pencarian" aria-describedby="button-addon2" autofocus="">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
				  </div>
				</div>				
			</form>

			<?php if(empty($dokter)): ?>
				<div class="alert alert-danger" role="alert">
					Data Tidak Ditemukan
				</div>

			<?php endif; ?>

			<ul class="list-group">
			<?php foreach($dokter as $dr): ?>
				<li class="list-group-item">
					<?= $dr['nama_dokter']; ?>
					<a href="<?php echo base_url().'dokter/ubah/'.$dr['id_dokter'] ?>" class="badge badge-primary float-right ml-2">Ubah</a>				
					<a href="<?php echo base_url().'dokter/hapus/'.$dr['id_dokter'] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin Mau di hapus')">Hapus</a>				
					<a href="<?php echo base_url().'dokter/detail/'.$dr['id_dokter'] ?>" class="badge badge-success float-right">Detail</a>				
				</li>
			<?php endforeach; ?> 
			</ul>
		</div>
	</div>
</div>