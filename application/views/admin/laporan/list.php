<div class="row box" id="printTable">
	<div class="col-md-12 col-sm-12 col-xs-12 ">
		<div class="box-header">
		</div>
			<div class="body">
				<img src="<?php echo base_url()?>templates/dist/img/laporan.png"width="900 px" width="100%">
				 <hr><p style="text-align: center;">
					<b>LAPORAN HASIL UJIAN SELEKSI PENERIMAAN MAHASISWA BARU</b> <br>
					Tahun Akademik <?php $tanggal=getdate(); echo $tanggal['year'] ?>
				</p>
				<table width="300px" height="100px">
					<tr>
						<td>Jumlah Peserta</td>
						<td width="20px"> : </td>
						<td><?php echo count($peserta) ?> Peserta</td>
					</tr>
					<tr>
						<td>Jumlah Selesai Ujian</td>
						<td> : </td>
						<td><?php echo count($ujian) ?> Selesai Ujian</td>
					</tr>
					<tr>
						<td>Jumlah Admin</td>
						<td> : </td>
						<td><?php echo count($admin) ?> Admin</td>
					</tr>
					<tr>
						<td>Jumlah Panitia</td>
						<td> : </td>
						<td><?php echo count($panitia) ?> Panitia</td>
					</tr>
					<tr>
						<td>Jumlah Soal</td>
						<td> : </td>
						<td><?php echo count($soal) ?> Soal</td>
					</tr> <br>
					
				</table> <br>
				<p>Berikut daftar Mahasiswa </p>
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<th width="2px">No</th>
						<th width="10px">Kode Pendaftaran</th>
						<th>Nama Peserta</th>
						<th>Jurusan</th>
						<th>Panitia</th>
						<th>Tanggal Ujian</th>
						<th>JK</th>
						<th>Tgl Lahir</th>
						<th>Alamat</th>
						<th>No Telp</th>
					</thead>
					<tbody>
						<?php $no = 1; foreach ($kelompok_data as $data): ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $data['kode_pendaftaran'] ?></td>
							<td><?php echo $data['nama_peserta'] ?></td>
							<td><?php echo $data['jurusan'] ?></td>
							<td><?php echo $data['nama_panitia'] ?></td>
							<td><?php echo $data['waktu']. ' , ' . $data['tgl'] ?></td>
							<td><?php echo $data['jenkel'] ?></td>
							<td><?php echo $data['tgl_lahir'] ?></td>
							<td><?php echo $data['alamat'] ?></td>
							<td><?php echo $data['no_telp'] ?></td>
						<!-- <?php $no = 1; foreach ($kelompok_data1 as $data): ?>
							<td><?php echo $data->nilai ?></td>
							<?php endforeach ?> -->
						</tr>
					<?php endforeach ?>
					</tbody>
				</table> <br> <hr>
				<button onclick class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  CETAK</button>
			</div>
	</div>	
</div>

<script type="text/javascript">
    function printData()
    {
        var
        divToPrint=document.getElementById('printTable');
        newWin= window.print("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('button').on('click',function(){
        printData();
    })
</script>