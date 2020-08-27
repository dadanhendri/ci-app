<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card mt-5">
				<h5 class="card-header">Ubah Data Dokter</h5>
				<div class="body">
					<div class="container">
						<form action="" method="post">
							<input type="hidden" name="id" value="<?php echo $dokter['id_dokter'] ?>">
							<div class="form-group">
								<label for="kddok">Kode Dokter</label>
								<input type="text" name="kddok" id="kddok" placeholder="Masukan Kode Dokter" class="form-control" value="<?php echo $dokter['kode_dok'] ?>">
								<?php echo form_error('kddok','<small class="text-danger">','</small>') ?>
							</div>
							<div class="form-group">
								<label for="nama">Nama Dokter</label>
								<input type="text" name="nama" id="nama" placeholder="Masukan Nama Dokter" class="form-control" value="<?php echo $dokter['nama_dokter'] ?>">
								<?php echo form_error('nama','<small class="text-danger">','</small>') ?>
							</div>							
							<div class="form-group">
								<label for="spesialis">Spesialis</label>
								<select name="spesialis" id="spesialis" class="form-control">
									<option value="">Pilih Spesialis</option>
									<?php foreach($spesialis as $sp): ?>
										<?php if($dokter['spesialis'] == $sp): ?>
											<option value="<?php echo $sp ?>" selected><?php echo $sp ?></option>
										<?php else: ?>
											<option value="<?php echo $sp ?>"><?php echo $sp ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="text">Telp Dokter</label>
								<input type="tel" name="telp" id="telp" placeholder="Masukan Nomor Telp" class="form-control" value="<?php echo $dokter['no_telp'] ?>">
								<?php echo form_error('telp','<small class="text-danger">','</small>') ?>

							</div>
							<button type="submit" class="btn btn-danger float-right" name="submit">Simpan</button>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>