<div class="row" id="printTable">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<TABLE height="150px">
								<img src="<?php echo base_url()?>templates/dist/img/atashasil.png"width="900 px" width="100%">
								<center><p> Tahun Akademik <?php $tanggal=getdate(); echo $tanggal['year'] ?></p></center>
								<tr><br><br><br>
									<td width="150px">Kode Pendaftaran</td>
									<td width="400px">: <?php echo $peserta['kode_pendaftaran'] ?> </td> 
									<td rowspan="4" colspan="3" width="230"><center>
										<?php if ($hasil == 'gaada'): ?>
											belum ujian
										<?php else: ?>
											SELAMAT ANDA LOLOS PADA  <br>
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
							<table>
								<tr>
									<td>
										<img src="<?php echo base_url()?>templates/dist/img/bawah.png"width="600 px">
									</td>
									<td><center><?php echo $panitia['nama_panitia'] ?></center></td>
								</tr>
								<tr>
									<td> </td>
									<td>_______________________</td>
								</tr>
							</table>


							<!-- <table>
								<tr>
									<td>Catatan :</td>
									<td border="1"><center>Foto</center><center>3x4</center></td>
								</tr>
								<tr>
									<td>Kartu ini dibawa pada saat pendaftaran ulang</td>
								</tr>
								<tr>
									<td>
										<table border="1" width="100px" height="110px" rowspan="2">
										<td><center>Foto</center><center>3x4</center></td>
										</table>
									</td>
								</tr>
							</table> -->
							<br>
						<button onclick class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  CETAK</button>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function printData()
    {
        var
        divToPrint=document.getElementById('printTable');
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('button').on('click',function(){
        printData();
    })
</script>