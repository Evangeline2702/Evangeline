 <div class="h-25"></div>

  <div class="cus_card_login" style="width: 425px;">
    <center><div style="font-family:bebas; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h1>PRINT LAPORAN SPP PDF</h1></div></center>
    <div style=" height: 10% !important"></div>
    <div class="d-flex justify-content-center form_container ">
      <form class="" action="<?php base_url()?>/Home/pdf_print_nis" method="post" autocomplete="off">
       <div class="inputBox" style="left: 5px; width: 170px;">
          <input type="number" required="required" name="nis" style="-webkit-appearance: none;" >
         <span>NIS</span>
     </div>
     <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: -3px;">
        <div class="col"><center><a  class="cus_btn-cek" type="submit">nis</a></center></div>
      </div>
  </form>
      <form class="" action="<?php base_url()?>/Home/pdf_print_bulan" method="post" autocomplete="off">
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
            <a href="/Home/pdf_print_all" class="ml-2 cus_nav-link-login">print semua data!</a>
        </div>
      </div>
</div>