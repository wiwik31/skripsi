<div class="row" id="printTable">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<TABLE>
								<tr>
									<th width="300"><img src="<?php echo base_url()?>templates/dist/img/pp.png" width="10%"></th>
									<th>KARTU TANDA UJIAN</th>
									<th><?php echo date('Y-m-d H:i') ?></th>
								</tr>
								<tr>
									<td>Kode Pendaftaran</td>
									<td>: <?php echo $peserta['kode_pendaftaran'] ?> </td>
								</tr>
								<tr>
									<td>Nama</td>
									<td>: <?php echo $peserta['nama_peserta'] ?></td>
									<td></td>
									<td style="border: 1px;">FOTO</td>
								</tr>
								<tr>
									<td>Pilihan Prodi</td>
									<td>: <?php echo  $peserta['id_jurusan'] == $jurusan['id'] ?  $jurusan['jurusan'] : ''  ?></td>
								</tr>
								<tr>
									<td>Ket</td>
									<td>: Selamat Anda lolos ddengan nilai : <?php echo $hasil->nilai ?> </td>
									<td></td>
									<td>TTD</td>
								</tr>
								<tr>
									<td>Kartu peserta ini dibawah saat ujian</td>
								</tr>
							</TABLE>
							<br>
						<button onclick>PRINT</button>
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