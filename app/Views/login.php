<div class="bg">
  <div class="bg_g"></div>
  <div class="h-25"></div>


  <div class="cus_card_login">
    <center><div style="font-family:bebas; top: 10px; color: rgba(255,255,255,1); position: relative; opacity: 1;"><h1>Login</h1></div></center>
    <div style=" height: 5% !important"></div>
    <div class="d-flex justify-content-center form_container ">
      <form class="" action="<?php base_url()?>/Home/proses_login" method="post" autocomplete="off">
       <div class="inputBox">
         <input type="text" required="required" name="u" style="-webkit-appearance: none;"  autocomplete="off">
         <span>Username</span>
       </div>
       <div class="inputBox" style="top: 15px;">
         <input type="password" required="required" name="p"  autocomplete="off">
         <span>Password</span>
       </div>
      <div class="d-flex justify-content-center mt-3 login_container" style="position: relative; top: 15px;">
        <button class="astext"><a type="submit" name="submit" class="cus_btn">Login</a></button>
      </div>
      <div class="mt-4">
        <div class="d-flex justify-content-center links" style="position: relative; top: 75px; color: white;">
            Don't have an account? <a href="/Home/signup" class="ml-2 cus_nav-link-login">Sign up</a>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>