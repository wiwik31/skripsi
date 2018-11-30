<div class="row" id="printTable">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<TABLE height="150px">
								<h2>HASIL UJIAN</h2> <hr>
								<br>
								<tr>
									<td width="150px">Kode Pendaftaran</td>
									<td width="400px">: <?php echo $peserta['kode_pendaftaran'] ?> </td> 
									<td rowspan="4" colspan="3" width="230"><center>
										<?php if ($hasil == 'gaada'): ?>
											belum ujian
										<?php else: ?>
											SELAMAT ANDA <b>LULUS</b> PADA  <br>
											JURUSAN <b><?php echo $hasil['jurusan'] ?></b> <br>
											Dengan nilai ujian <b><?php echo $hasil['nilai'] ?></b>
											<!-- nilai <b><?php echo $hasil['nilai'] ?></b> -->
										<?php endif ?></center></td>
									
								</tr>
								<tr>
									<td>Nama</td>
									<td>: <?php echo $peserta['nama_peserta'] ?></td>
								</tr> 
								<tr>
									<td>Pilihan Prodi 1</td>
									<td>: <?php echo  $peserta['id_jurusan'] == $jurusan['id'] ?  $jurusan['jurusan'] : ''  ?></td>
								</tr> 
								<tr>
									<td>Pilihan Prodi 2</td>
									<td>: <?php echo  $peserta['id_jurusan2'] == $jurusan2['id'] ?  $jurusan2['jurusan'] : ''  ?></td>
								</tr> 
								<tr>
									<td>Jadwal Ujian</td>
									<td>: <?php echo $jadwal['waktu']. ' ' .$jadwal['tgl'] ?></td>
								</tr>
								<tr>
								</tr>
							</TABLE>
							<p style="color: red;">
								<i>Catatan : </i> <br>
								Silahkan menuju ke tempat panitia untuk mencetak hasil ujian. <br>
								Untuk info lebih lanjut hubungi panitia.
							</p>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
