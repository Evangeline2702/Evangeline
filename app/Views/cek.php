
<div class="cus_card_table" style="overflow:auto; color: white; position: absolute; width: 785px; overflow-x: hidden; letter-spacing:2px;">
<table class="table "  style="width: 780px;">
	<!-- <caption> SPP</caption> -->
	<tr>
		<th>#</th>
    	<th>Code</th>
		<th>Keterangan</th>
		<th style="text-align: right;">Jumlah Harga</th>
		<th><center>Status</center></th>
	</tr>
	<?php
		$no=1;
		foreach ($tampil as $key) {
		?>
		<tr>
			<td style="width: 50px;"><?php echo $no++;?>.</td>
      <td style="width: 75px;"><?php echo $key->code;?></td>
			<td style="width: 75px;"><?php echo $key->bulan;?></td>
			<td style="width: 150px; text-align: right;">Rp. <?php echo number_format($key->jumlah , 0, ',', '.')?>,00</td>
			<td style="width: 150px;">
  <details>
    <summary>
			<center><div class="cus_btn-bayar" style="height: 30px; width: 100px; top: -2px; letter-spacing: 2px;">Status</div></center>
      <div class="details-modal-overlay"></div>
    </summary>
    <div class="details-modal">
      <div class="details-modal-close">

      </div>
      <div class="details-modal-title">
        <h1><div style="color: darkblue;"><?php echo $key->code;?></div>Yang sudah lunas</h1>
      </div>
      <div class="details-modal-content">
        <p style="color: black;">
          <?php echo $key->status;?>

        </p>
      </div>
    </div>
  </details>
</td>
		</tr>
	<?php }?>

</table>
<center>
<a class="cus_btn-bayar" style="height: 30px; width: 100px; top: -2px; letter-spacing: 2px; left: 3px" href="/home/print">excel</a>
<a class="cus_btn-bayar" style="height: 30px; width: 100px; top: -2px; letter-spacing: 2px; left: 3px" href="/home/print_pdf">pdf</a>
<div style="height: 7px;"></div>
</center>
    </div>
</div>
