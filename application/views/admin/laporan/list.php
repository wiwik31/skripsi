<div class="row box">
	<div class="col-md-12 col-sm-12 col-xs-12 ">
		<div class="box-header">
		<h3 class="box-title">LAPORAN</h3>
		</div>
			<!-- <a href="<?php echo site_url('/matauji/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i> Tambah Mata Ujian</a> -->

			<div class="body">
				<table id="example2" class="table table-bordered table-hover">
				<thead>
					<th>No</th>
					<th>Jumlah Terdaftar</th>
					<th>Selesai Ujian</th>
					<th>Lulus</th>
					<th>Tidak Lulus</th>
				</thead>

				<tbody>
					<?php $no = 1; foreach ($kelompok_data as $data): ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $data->terdaftar ?></td>
							<td><?php echo $data->selesai_ujian ?></td>
							<td><?php echo $data->lulus ?></td>
							<td><?php echo $data->tidak_lulus ?></td>

							<td  style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/laporan/edit/').$data->id ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/laporan/hapus/').$data->id ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			</div>
	</div>	
</div>