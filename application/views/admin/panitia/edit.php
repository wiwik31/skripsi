<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Update Mata Ujian</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $panitia['id_jadwal'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jadwal</span>
										</div>
										<div class="col-md-12">
											<select name="id_jadwal" class="form-control" style="font-size: 12px;">
												<?php $jadwal = $this->Panitia_model->getlistjadwal();

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
											<span>Nama : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_panitia" class="form-control" style="font-size: 12px;" value="<?php echo $panitia['nama_panitia'] ?>">
										</div>
									</div>
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="<?php echo site_url('/panitia/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>