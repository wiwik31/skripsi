<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Soal</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Mata Uji</span>
										</div>
										<div class="col-md-12">
											<select name="id_matauji" class="form-control " style="font-size: 12px;">
												<option>-Pilih-</option>
												<?php $matauji = $this->Matauji_model->getlistmatauji();

												?>
												<?php foreach ($matauji->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->nama_matauji; ?></option>
												<?php } ?> 
											</select>
										</div>
									</div>
									<!-- <div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Mata Ujian : </span>
										</div>
										<div class="col-md-12">
											<select name="id_matauji" class="form-control" >
												<option>-Pilih-</option>
												<?php $soal = $this->Soal_model->getlistsoal();
												 ?>
												<?php foreach ($matauji->result() as $key){ ?>
													<option value="<?php echo $key->id ?>" ><?php echo $key->nama_matauji;?></option>
												<?php } ?>
											</select>
										</div>
									</div> -->
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Pertanyaan : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="pertanyaan" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>A : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="a" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>B : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="b" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br><div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>C : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="c" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br><div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>D : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="d" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br><div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>E : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="e" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br><div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jawaban : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="jawaban" class="form-control" style="font-size: 12px;">
										</div>
									</div>
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
									<a href="<?php echo site_url('/soal/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>