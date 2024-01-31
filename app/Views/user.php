


    <!-- <div style="position: absolute; padding: 25px 100px;"> -->

	<?php if (session()->level=="3" ) {?>

<div class="cus_card_table" style="overflow:auto; color: white; position: absolute; width: 685px; overflow-x: hidden; letter-spacing:2px;">
<table class="table "  style="width: 680px;">
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
		foreach ($stat as $key) {
		?>
		<tr>
			<td style="width: 50px;"><?php echo $no++;?>.</td>
      <td style="width: 75px;"><?php echo $key->code;?></td>
			<td style="width: 75px;"><?php echo $key->bulan;?></td>
			<td style="width: 150px; text-align: right;">Rp. <?php echo number_format($key->jumlah , 0, ',', '.')?>,00</td>
			<td style="width: 150px;"><center><a href="home/bayar/<?= $key->id_spp?>" class="cus_btn-bayar">Bayar</a></center></td>
		</tr>
	<?php }

	foreach ($stat2 as $key) {
		?>
		<tr>
			<td style="width: 50px;"><?php echo $no++;?>.</td>
      <td style="width: 75px;"><?php echo $key->code;?></td>
			<td style="width: 100px;"><?php echo $key->bulan;?></td>

			<td style="width: 150px; text-align: right;">Rp. <?php echo number_format($key->jumlah , 0, ',', '.')?>,00</td>
			<td style="width: 200px;"><center><a class="cus_btn-lunas" disabled>Lunas</a></center></td>

			<?php } ?>


</table>
    </div>
</div>



	<?php } 

// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
 elseif (session()->level=="1" OR session()->level=="2") { ?>

  <div class="h-25"></div>

  <div class="cus_card_login" style="width: 425px;">
    <center><div style="font-family:bebas; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h1>CEK SPP</h1></div></center>
    <div style=" height: 10% !important"></div>
    <div class="d-flex justify-content-center form_container ">
      <form class="" action="<?php base_url()?>/Home/proses_cek_nis" method="post" autocomplete="off">
       <div class="inputBox" style="left: 5px; width: 170px;">
       		<input type="number" required="required" name="nis" style="-webkit-appearance: none;" >
         <span>NIS</span>
     </div>
     <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: -3px;">
      	<div class="col"><center><a  class="cus_btn-cek" type="submit">nis</a></center></div>
      </div>
  </form>
      <form class="" action="<?php base_url()?>/Home/proses_cek_bulan" method="post" autocomplete="off">
 <div class="inputBox" style="left: 5px; width: 192px;">
       		<input type="text" required="required" name="bulan" style="-webkit-appearance: none;" >
         <span>BULAN</span>
     </div>
     <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: -3px;">
      	<div class="col"><center><a class="cus_btn-cek" type="submit">bulan</a></center></div>
      </div>
  </form>
  </div>
        <div class="mt-4">
        <div class="d-flex justify-content-center links" style="position: relative; top: 75px;">
            <a href="/Home/cek" class="ml-2 cus_nav-link-login">check all data!</a>
        </div>
      </div>
</div>
       <!-- </div>
    <center><div style="font-family:poppins;text-transform: lowercase; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h4>cek with</h4></div></center>
      <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: 15px;">
      	<div class="col"><center><a href="" class="cus_btn-cek">nis</a></center></div>
      	<div class="col"><center><a href="" class="cus_btn-cek">code</center></a></div>
      </div>
      </div>
      </form>
    </div>
  </div>
</div> -->




 <?php  } else { ?>

 	<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
 	<div class="bg">
  <!-- <div class="bg_g"></div> -->
  <div class="h-25"></div>


  <div class="cus_card_login" style="height: 100px; width: 500px;">
    <center><div style="font-family:bebas; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h1>SPP</h1></div></center>
    <div class="d-flex justify-content-center links" style="position: relative; top: 5px;">
           There is something wrong! <a href="/Home/login" class="ml-2 cus_nav-link-login">Log in</a>
        </div>
  </div>
</div>
<?php  } ?>


