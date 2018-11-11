<div class="row" id="printTable">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<TABLE>
								<tr>
									<th><img src="templates/dist/img/pp.png"></th>
									<th>KARTU TANDA UJIAN</th>
									<th>TANGGAL</th>
								</tr>
								<tr>
									<td>Kode Pendaftaran</td>
									<td>:</td>
								</tr>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td></td>
									<td style="border: 1px;">FOTO</td>
								</tr>
								<tr>
									<td>Pilihan Prodi</td>
									<td>:</td>
								</tr>
								<tr>
									<td>Ket</td>
									<td>:</td>
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