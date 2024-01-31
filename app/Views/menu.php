<nav class="navbar navbar-expand-sm navbar-light" style="font-family: poppins; background-color: rgba(255, 255, 255, 0.3); letter-spacing:2px;
      backdrop-filter: blur(10px);">
  <ul class="navbar-nav">
    <li class="nav-item active">
     <a class="btn cus_btn-outline-secondary btn-lg" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <i class="fas fa-bars" ></i>
</a>
<ul class="nav navbar-nav float-md-right">
  <div class="col">
<div class="card" style="width: 49px; height: 20px; position: relative; background-color: transparent;">
<img src="../../../../../img/<?php echo session()->profile;?>"> 
</div>
</div>
<div style="position: relative; top: 5px; ">
<h2 style="color: white; font-family: poppins; font-size: 30px;letter-spacing:4px;"><?php echo session()->username;?></h2>
</div>
</ul>


    <!-- </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li> -->

  </ul>
</nav>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="font-family: poppins;  background-color: rgba(255, 255, 255, 0.3); letter-spacing:2px; color: white;
      backdrop-filter: blur(10px);" >
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a href="../../Home"><img src="/img/logo.png" style="width: 3rem; height: 3rem'"></img></a> GP</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    Selamat Datang Pada Galeri Photo, <b><?php echo session()->username;?></b>
    </div>
    <div id="accordion">

  <div class="card" style="font-family: poppins;  background-color: rgba(1, 1, 1, 0.001);
      backdrop-filter: blur(10px);">
    <!-- <div class="card-header">
      <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        Menu
      </a>
    </div> -->
    <!-- <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
      <div class="card-body">
        <a href="<?php base_url()?>/Home/History" class="cus_nav-link">
          <div>
            History
          </div>
        </a>
        <a href="<?php base_url()?>/Home/cek_tiket" class="cus_nav-link">
          <div>
            Cek Tiket
          </div>
        </a>
      </div>
    </div> -->
  </div>
  <!-- <?php if(session()->get('level')==1 or session()->get('level')==2){ ?> -->
  <div class="card" style="font-family: poppins;  background-color: rgba(1, 1, 1, 0.001);
      backdrop-filter: blur(10px);">
    <!-- <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
        Admin
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        <a href="<?php base_url()?>/Home/cek_tiket" class="cus_nav-link">Cek Tiket</a>
  <?php if(session()->get('level')==1){ ?>
        <a href="<?php base_url()?>/Home/user" class="cus_nav-link">User</a>
    <?php } ?>
      </div>
    </div> -->
  </div>
    <?php } ?>
  <div class="card" style="font-family: poppins;  background-color: rgba(1, 1, 1, 0.001);
      backdrop-filter: blur(10px);">
    <div class="card-header">
      <a href="../../Home/logout" class="cus_nav-link">Log out
      </a>
    </div>
   <!--  <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        <a href="../../Home/setting/<?php echo session()->id_user;?>" class="cus_nav-link">Setting</a>
        <a href="../../Home/logout" class="cus_nav-link">Log out</a>
      </div>
    </div> -->
  </div>

</div>
  </div>
</div>