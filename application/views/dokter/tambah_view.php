<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card mt-5">
				<h5 class="card-header">Tambah Data Dokter</h5>
				<div class="body">
					<div class="container">
						<form action="" method="post">
							<div class="form-group">
								<label for="kddok">Kode Dokter</label>
								<input type="text" name="kddok" id="kddok" placeholder="Masukan Kode Dokter" class="form-control">
							</div>
							<div class="form-group">
								<label for="nama">Nama Dokter</label>
								<input type="text" name="nama" id="nama" placeholder="Masukan Nama Dokter" class="form-control">
							</div>							
							<div class="form-group">
								<label for="spesialis">Spesialis</label>
								<select name="spesialis" id="spesialis" class="form-control">
									<option value="">Pilih Spesialis</option>
									<option value="Ginjal Hipertensi">Poli Ginjal Hipertensi</option>
								</select>
							</div>
							<div class="form-group">
								<label for="text">Telp Dokter</label>
								<input type="tel" name="telp" id="telp" placeholder="Masukan Nomor Telp" class="form-control">
							</div>
							<button type="submit" class="btn btn-danger float-right" name="submit">Simpan</button>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>