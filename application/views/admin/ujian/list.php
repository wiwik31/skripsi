<div class="row box">
	<div class="col-md-12 col-sm-12 col-xs-12 ">
		<div class="box-header">
		<h3 class="box-title">Hasil Ujian</h3>
		</div>
			<!-- <a href="<?php echo site_url('/matauji/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i> Tambah Mata Ujian</a> -->

			<div class="body">
				<table id="example2" class="table table-bordered table-hover">
				<thead>
					<th>No</th>
					<th>Nama Peserta</th>
					<th>Panitia</th>
					<th>Jadwal</th>
					<th>Jumlah Benar</th>
					<th>Jumlah Salah</th>
					<th>Nilai</th>
					<th>Status</th>
					<th>Aksi</th>
				</thead>

				<tbody>
					<?php $no = 1; foreach ($kelompok_data as $data): ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $data->id_peserta ?></td>
							<td><?php echo $data->id_panitia ?></td>
							<td><?php echo $data->id_jadwal ?></td>
							<td><?php echo $data->j_benar ?></td>
							<td><?php echo $data->j_salah ?></td>
							<td><?php echo $data->nilai ?></td>
							<td>
								<?php
									if ($data->status==1) {
										echo "Lulus";
									}else{
										echo "Tidak Lulus";
									}
								 ?>
							</td>
							<!-- <td><?php echo $data->status ?></td> -->
							<td  style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/ujian/edit/').$data->id_ujian ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/ujian/hapus/').$data->id_ujian ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			</div>
	</div>	
</div>