<div class="bg">
  <div class="bg_g"></div>
  <div class="h-25"></div>


  <div class="cus_card_login " style="height: 600px;">
    <center><div style="font-family:bebas; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h1>SPP</h1></div></center>
    <div style=" height: 5% !important"></div>
    <div class="d-flex justify-content-center form_container">
      <form class="" action="<?php base_url()?>/Home/proses_signup" method="post" autocomplete="off">
       <div class="inputBox" style=" width: 268px;">
         <input type="number" required="required" name="nis" style="-webkit-appearance: none;"  >
         <span>NIS</span>
       </div>
       <div class="inputBox" style="top: 15px; width: 268px;">
         <input type="text" required="required" name="username" >
         <span>Username</span>
       </div>
        <div class="inputBox" style="top: 30px; width: 268px;">
         <input type="text" required="required" name="nama" >
         <span>Nama Lengkap</span>
       </div>
        <div class="inputBox" style="top: 45px; width: 268px;">
         <input type="text" required="required" name="kelas" >
         <span>Kelas</span>
       </div>
        <div class="inputBox" style="top: 60px; width: 268px;">
         <input type="file" required="required" name="profile" >
         <span>Profile</span>
       </div>
       <div class="inputBox" style="top: 75px; width: 268px;">
         <input type="password" required="required" name="pass" >
         <span>Password</span>
       </div>
      <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: 75px;">
        <button class="astext"><a type="submit" name="submit" class="cus_btn">signup</a></button>
      </div>
      <div class="mt-4">
        <div class="d-flex justify-content-center links" style="position: relative; top: 75px; color: white;">
           Already have an account? <a href="/Home/login" class="ml-2 cus_nav-link-login">Login</a>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>