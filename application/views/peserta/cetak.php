<div class="row" id="printTable">
	<div class="col-md-8 col-sm-8 col-xs-8">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<TABLE height="100px">
								<img src="<?php echo base_url()?>templates/dist/img/logo.png"width="900 px" width="100%"> <br>
								<tr><br>
									<td width="150px">Kode Pendaftaran</td>
									<td width="400px">: <?php echo $peserta['kode_pendaftaran'] ?> </td> 
									<td>TATA TERTIB UJIAN</td>
								</tr>
								<tr>
									<td>Nama</td>
									<td>: <?php echo $peserta['nama_peserta'] ?></td>
									<td>1. Peserta ujian wajib hadir 15 menit sebelum ujian dimulai</td>
								</tr> 
								<tr>
									<td>Pilihan Prodi 1</td>
									<td>: <?php echo  $peserta['id_jurusan'] == $jurusan['id'] ?  $jurusan['jurusan'] : ''  ?></td>
									<td>2. Memakai pakaian rapi</td>
								</tr> 
								<tr>
									<td>Pilihan Prodi 2</td>
									<td>: <?php echo  $peserta['id_jurusan2'] == $jurusan2['id'] ?  $jurusan2['jurusan'] : ''  ?></td>
									<td>3. Peserta ujian diharuskan menggunakan sepatu</td>
								</tr>
								<tr>
									<td>Jadwal Ujian</td>
									<td>: <?php echo $jadwal['waktu']. ' ' .$jadwal['tgl'] ?></td>
									<td>4. Peserta ujian tidak dibenarkan mengganggun jalannya ujian</td>
								</tr>
								<tr>
									<td>Panitia</td>
									<td>: <?php echo $panitia['nama_panitia'] ?></td>
									<td>5. Bagi peserta ujian laki-laki, tidak boleh berambut panjang/gondrong</td>
								</tr>
								<tr><td></td>
									<td></td>
									<td>6. HP dinonaktifkan selama ujian berlangsung</td>
								</tr>
							</TABLE> <br> <br>
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
						<button onclick class="btn btn-primary btn-sm"><i class="fa fa-print"></i>  CETAK</button>
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