
  <div class="h-25"></div>


  <div class="cus_card_login" style="width: 340px; font-family: poppins; color: white;">
    <center><div style="font-family:bebas; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h1>Bayar</h1></div></center>
    <div style=" height: 5% !important"></div>
    <?php foreach ($tampil as $key) { ?>
    <div class=" ">
      <form method="post" action="<?php base_url()?>/Home/proses_bayar">
        <input type="hidden" name="id" value="<?=$key->id_spp?>">
        <input type="hidden" name="status" value="<?=$key->status?>">
        <input type="hidden" name="bulan" value="<?=$key->bulan?>">
        <input type="hidden" name="code" value="<?=$key->code?>">
       <div class="row">
        <div class="col" style="left: 30px;">Keterangan</div>
        <div class="col-1" style="left: -30px;">:</div>
        <div class="col" style="left: -50px;"><?php echo $key->bulan;?></div>
      </div>
       <div class="row" style="padding: 10px 0px;">
        <div class="col" style="left: 30px;">Jumlah Pembayaran</div>
        <div class="col-1" style="left: -30px;">:</div>
        <div class="col" style="left: -50px;">Rp. <?php echo number_format($key->jumlah , 0, ',', '.')?>,00</div>
      </div>
       <div class="row" style="padding: 10px 0px;">
        <div class="col"></div>
        <div class="col"><center>Code</center></div>
        <div class="col"></div>
      </div>
      <div class="row">
        <div class="col"></div>
        <div class="col"><center><h2><?php echo $key->code;?></h2></center></div>
        <div class="col"></div>
      </div>
       <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: 15px;">
        <button class="astext"><a type="submit" name="submit" class="cus_btn">Bayar</a></button>
    </form>
      </div>
    </div>
  <?php } ?>
  </div>
</div>