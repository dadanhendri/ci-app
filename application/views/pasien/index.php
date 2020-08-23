
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center"><?php echo $title ; ?></h1>

				<a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit('tambah')">Tambah Data</a>

				<table class="table table-hover table-border table-sm">
					<thead class="bg-danger">
						<tr>
							<th>No</th>
							<th>No RM</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>No Telp</th>
							<th>Action</th>
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

							<div class="alert alert-danger" id="pesan"></div>

							<div class="modal-body">
								<form action="">
									<input type="hidden" name="id" id="id">
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
								<button type="button" data-dismiss="modal" class="btn btn-danger" id="close">Close</button>
								<button type="text" class="btn btn-primary" id="btn-tambah" onclick="tambahData();">Tambah</button>
								<button type="text" class="btn btn-primary" id="btn-ubah" onclick="ubahData();">Ubah</button>
							</div>
							
						</div>
					</div>
					
				</div>
				<!--akhir modal -->
				
			</div>
		</div>
	</div>


