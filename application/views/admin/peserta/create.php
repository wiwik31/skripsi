<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Peserta</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Pendaftaran : </span>
										</div>
										<div class="col-md-12">
											<input type="text" readonly="readonly" name="kode_pendaftaran" class="form-control " style="font-size: 12px;" value="KD-<?php echo strtoupper(substr(uniqid(), 7,12)) ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Peserta : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_peserta" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jurusan 1</span>
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
											<span>Jurusan 2</span>
										</div>
										<div class="col-md-12">
											<select name="id_jurusan2" class="form-control " style="font-size: 12px;">
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
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Tanggal lahir: </span>
										</div>
										<div class="col-md-12">
											<input type="date" name="tgl_lahir" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Alamat: </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="alamat" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nomor Telephone: </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="no_telp" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Email: </span>
										</div>
										<div class="col-md-12">
											<input type="email" name="email" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Username: </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="username" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Password: </span>
										</div>
										<div class="col-md-12">
											<input type="password" name="password" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Tahun Akademik: </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="tahun" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
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