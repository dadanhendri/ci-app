	<script src="<?php echo base_url(). 'assets/js/jquery-3.5.1.min.js'; ?>"></script>
	<script src="<?php echo base_url(). 'assets/js/bootstrap.js' ?>"></script>
	<script src="<?php echo base_url(). 'assets/js/sweetalert/sweetalert2.all.min.js' ?>"></script>
	<script>

			ambilData();

			function clear(){
				$("[name='norm']").val('');
				$("[name='nama']").val('');
				$("[name='alamat']").val('');
				$("[name='notelp']").val('');				
			}

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
										'<td>'+
											'<a href="#form" data-toggle="modal" class="badge badge-success" onclick="submit('+data.id+')">Ubah</a>'+
											'<a href="" class="badge badge-danger ml-10" onclick="hapusData('+data.id+')">Hapus</a>'+
										'</td>'+
									'</tr>';
							no++;
						});

						$('#tabel-pasien').html(html);
					}
				});
			}

			function tambahData(){
				clear();
				$('#pesan').hide();
				var norm = $("[name='norm']").val();
				var nama = $("[name='nama']").val();
				var alamat = $("[name='alamat']").val();
				var notelp = $("[name='notelp']").val();

				$.ajax({
					type:'post',
					url:'<?php echo base_url()."pasien/tambahData" ?>',
					data:'no_rekam_medis='+norm+'&nama_pasien='+nama+'&alamat='+alamat+'&no_telp_pasien='+notelp,
					dataType:'json',
					success:function(hasil){
						$('#pesan').html(hasil);
						// $('#pesan').show();
						if(hasil == ''){
							swal.fire({
								title:'Data berhasil ditambahkan',
								icon:'success'
							});

							$('#form').modal('hide');
							ambilData();
							clear();
						}
					}
				});
			}

			function submit(x){
				if(x=='tambah'){
					$('#btn-tambah').show();
					$('#btn-ubah').hide();
				}else{
					$('#btn-tambah').hide();
					$('#btn-ubah').show();

					$.ajax({
						type:'post',
						url:'<?php echo base_url()."pasien/ambilDataById" ?>',
						data:'id='+x,
						dataType:'json',
						success:function(hasil){
							$("[name='id']").val(hasil[0].id);
							$("[name='norm']").val(hasil[0].no_rekam_medis);
							$("[name='nama']").val(hasil[0].nama_pasien);
							$("[name='alamat']").val(hasil[0].alamat);
							$("[name='notelp']").val(hasil[0].no_telp_pasien);
						}
					});
				}
			}

			function ubahData(){
				var id = $("[name='id']").val();
				var norm = $("[name='norm']").val();
				var nama = $("[name='nama']").val();
				var alamat = $("[name='alamat']").val();
				var notelp = $("[name='notelp']").val();

				$.ajax({
					type:'post',
					url:'<?php echo base_url()."pasien/ubah" ?>',
					data:'id='+id+'&norm='+norm+'&nama='+nama+'&alamat='+alamat+'&notelp='+notelp,
					dataType:'json',
					success: function(hasil){						
						$("#pesan").html(hasil);
						if(hasil == ''){
							swal.fire({
								title:'Data berhasil diubah',
								icon:'success'
							});
							clear();
							$('#form').modal('hide');

							ambilData();
						}
					}
				})
			}

			function hapusData(id){
				// swal.fire({
				// 	title: 'Yakin Mau di hapus ?',
				// 	icon:'warning'
				// });
				var tanya = confirm('Yakin Mau di hapus?');
				if(tanya){
					$.ajax({
						type:'post',
						data:'id='+id,
						url:'<?php echo base_url()."pasien/hapus" ?>',
						success: function(){
							ambilData();
						}
					});
				}
			}









	</script>
	
</body>
</html>	