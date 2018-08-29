<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Update Peserta</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Kode Pendaftaran : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kode_pendaftaran" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['kode_pendaftaran'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Nama Peserta : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_peserta" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['nama_peserta'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jurusan</span>
										</div>
										<div class="col-md-12">
											<select name="id_jurusan" class="form-control " style="font-size: 12px;">
												<option>-Pilih-</option>
												<?php $jurusan = $this->Peserta_model->getlistjurusan();

												?>
												<?php foreach ($jurusan->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->jurusan; ?></option>
												<?php } ?> 
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Panitia</span>
										</div>
										<div class="col-md-12">
											<select name="id_panitia" class="form-control " style="font-size: 12px;">
												<option>-Pilih-</option>
												<?php $panitia = $this->Peserta_model->getlistpanitia();

												?>
												<?php foreach ($panitia->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->nama_panitia; ?></option>
												<?php } ?> 
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jadwal</span>
										</div>
										<div class="col-md-12">
											<select name="id_jadwal" class="form-control " style="font-size: 12px;">
												<option>-Pilih-</option>
												<?php $jadwal = $this->Peserta_model->getlistjadwal();

												?>
												<?php foreach ($jadwal->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->jadwal; ?></option>
												<?php } ?> 
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jenis Kelamin : </span>
										</div>
										<div class="col-md-12">
											<tr>
												<td>
													<input type="radio" name="jenkel" value="L" checked="" />Laki-laki
									    			<input type="radio" name="jenkel" value="P"/>Perempuan<br/>
												</td>
											</tr>
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Tanggal Lahir : </span>
										</div>
										<div class="col-md-12">
											<input type="date" name="tgl_lahir" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['tgl_lahir'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Alamat : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="alamat" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['alamat'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >No Telephone : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="no_telp" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['no_telp'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Email : </span>
										</div>
										<div class="col-md-12">
											<input type="email" name="email" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['email'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Username : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="username" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['username'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Password : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="password" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['password'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Status : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="status" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['status'] ?>" >
										</div>
									</div>
									<br>
					
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="<?php echo site_url('/peserta/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>