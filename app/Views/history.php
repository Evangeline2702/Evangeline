<div class="cus_card_table" style="overflow:auto; color: white; position: absolute; width: 685px;">
<table class="table"  style="width: 680px;">
	<!-- <caption> SPP</caption> -->
	<tr>
		<th>#</th>
		<th>Keterangan</th>
		<th style="text-align: right;">CODE</th>
		<th style="text-align: right;">Tanggal</th>
		<th><center>Status</center></th>
	</tr>
	<?php
		$no=1;
		foreach ($history as $key) {
		?>
		<tr>
			<td style="width: 50px;"><?php echo $no++;?>.</td>
			<td style="width: 75px;"><?php echo $key->bulan;?></td>
			<td style="width: 75px;text-align: right;"><?php echo $key->code;?></td>
			<td style="width: 75px;text-align: right;"><?php echo $key->tanggal;?></td>
			<td style="width: 200px;"><center><a class="cus_btn-lunas" disabled>Lunas</a></center></td>
		</tr>
	<?php }?>
</table>
    </div>
</div>
