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
										<input type="hidden" name="id" value="<?php echo $matauji['id'] ?>">

										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Mata Uji : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_matauji" class="form-control" style="font-size: 12px;" value="<?php echo $matauji['nama_matauji'] ?>">
										</div>
									</div>
									<br>
									<!-- <div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Status : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="status" class="form-control" style="font-size: 12px;" value="<?php echo $matauji['status'] ?>">
										</div>
									</div> -->
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="<?php echo site_url('/matauji/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>