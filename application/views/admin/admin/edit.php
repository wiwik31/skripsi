<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Update Admin</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $admin['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_admin" class="form-control" style="font-size: 12px;" value="<?php echo $admin['nama_admin'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Email : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="email" class="form-control" style="font-size: 12px;" value="<?php echo $admin['email'] ?>">
										</div>


									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Username : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="username" class="form-control" style="font-size: 12px;" value="<?php echo $admin['username'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Password : </span><br>
											<small>* Kosongkan jika tidak ingin mengedit password</small>
										</div>
										<div class="col-md-12">
											<input type="text" name="password" class="form-control" style="font-size: 12px;"  >
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Status : </span>
										</div>
										<div class="col-md-12">
											<select name="status" class="form-control">
												<?php if ($admin['status'] == 1): ?>
													<option value="1" selected="selected" >Aktif</option>
													<option value="0" >Tidak Aktif</option>
												<?php else: ?>
													<option value="1"  >Aktif</option>
													<option value="0" selected="selected" >Tidak Aktif</option>
												<?php endif ?>

											</select>
										</div>
									</div>
									<br>
									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
									<a href="<?php echo site_url('/admin/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>