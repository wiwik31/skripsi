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
											<input type="text" name="nama" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['nama'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Jurusan : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="id_jurusan" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['id_jurusan'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Panitia : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="id_panitia" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['id_panitia'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >jadwal : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="id_jadwal" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['id_jadwal'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >jenis Kelamin : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="jenkel" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['jenkel'] ?>" >
										</div>
									</div>
									<br>
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $peserta['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span >Tanggal Lahir : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="tgl_lahir" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['tgl_lahir'] ?>" >
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
											<input type="text" name="email" class="form-control " style="font-size: 12px;" value="<?php echo $peserta['email'] ?>" >
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