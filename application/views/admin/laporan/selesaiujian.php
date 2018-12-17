<?php 
function checkHasil($id){
		$ci =& get_instance();
		$check = $ci->db->query(" SELECT * FROM ujian WHERE id_peserta = '$id' ")->row();
	 	if (!$check) {
	 		return 'gaada';
	 	}
	 	
	 	$peserta = $ci->db->query("SELECT * FROM peserta where id='$id' ")->row();

		$arr = array(); 
	  	if ($check->nilai >=50) {
			$checkJurusan = $ci->db->query("SELECT * FROM jurusan WHERE id ='$peserta->id_jurusan' ")->row();
	  		$arr = array(
	  			'nilai'=>$check->nilai,
	  			'jurusan'=> $checkJurusan->jurusan
	  		);
	    }else{
	    	$checkJurusan = $ci->db->query("SELECT * FROM jurusan WHERE id ='$peserta->id_jurusan2' ")->row();
	  		$arr =array(
	  			'nilai'=>$check->nilai,
	  			'jurusan'=> $checkJurusan->jurusan
	  		);
	    }

	    // var_dump(array('hasil'=>$arr));exit;

	    return $arr;
		
	}

 ?>

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
					</tr>
					<tr>
						<td>Jumlah Selesai Ujian</td>
						<td> : </td>
						<td style="color: Red; font-size: 19;"><b><?php echo count($ujian) ?> Selesai Ujian</b></td>
					</tr><br>
					
				</table> <br>
				<h4><center><b>Berikut daftar Mahasiswa Selesai Ujian</b></center></h4> <br>
				<table id="example2" class="table table-bordered table-hover">
				<thead>
					<th>No</th>
					<th>Kode Pendaftaran</th>
					<th>Nama Peserta</th>
					<th>JK</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>No Hp</th>
					<th>Tahun</th>
					<th>Jumlah Benar</th>
					<th>Jumlah Salah</th>
					<th>Nilai</th>
					<th>Jurusan</th>
					<th>Status</th>
					<!-- <th>Aksi</th> -->
				</thead>

				<tbody>
					<?php $no = 1; foreach ($kelompok_data1 as $data): ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $data->kode_pendaftaran ?></td>
							<td><?php echo $data->nama_peserta ?></td>
							<td><?php echo $data->jenkel ?></td>
							<td><?php echo $data->tgl_lahir ?></td>
							<td><?php echo $data->alamat ?></td>
							<td><?php echo $data->no_telp ?></td>
							<td><?php echo $data->tahun ?></td>
							<td><?php echo $data->j_benar ?></td>
							<td><?php echo $data->j_salah ?></td>
							<td><?php echo $data->nilai ?></td>
							<td><?php
								$j = checkHasil($data->id_peserta);
								echo $j['jurusan'];

							 ?></td>
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
							<!-- <td  style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/ujian/edit/').$data->id_ujian ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/ujian/hapus/').$data->id_ujian ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
							</td> -->
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