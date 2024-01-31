<div class="container">
<div class="cus_card_table" style="overflow:auto; color: black; position: absolute;">
<table class="table table-hover">
  <tr>
    <!-- <td>No</td> -->
    <td>Username</td>
    <td>Photo</td>
    <!-- <td>NIS</td> -->
    <!-- <td>Nama Lengkap</td> -->
    <!-- <td>Kelas</td> -->
    <!-- <td>Level</td> -->
    <td>Aksi</td>
  </tr>
  <?php
    $no=1;
    foreach ($tampil as $key) {
    ?>
    <tr>
      <!-- <td><?php echo $no++?>.</td> -->
        <td><?php echo $key->username?></td>
      <td>
        <div class="card" style="width: 3rem; height: 3rem; border-radius: 50%; left: 120px">
          <img src="../../img/<?php echo $key->profile?>">
        </div>
      </td>
      <!-- <td><?php echo $key->nis?></td> -->
      <!-- <td><?php echo $key->username?></td> -->
      <!-- <td><?php echo $key->nama?></td> -->
      <!-- <td><?php echo $key->kelas?></td> -->
      <!-- <td><?php echo $key->level?></button></td> -->
      <td>
        <a href="<?= base_url('home/index')?>" title="Love it" class="btn" data-count="0"><span>&#x2764;</span><button type="button" class="btn btn-love" style="border-radius: 50%; background-color: transparent; border-color: : 1px darkblue;"></button></a>
      </td>
      <!-- <td>
        <a href="/Home/edit_users/<?= $key->nis?>">
        <button type="button" class="btn btn-info" style="border-radius: 50%; background-color: transparent; border-color: : 1px darkblue;"><i class="fas fa-pen"></i></button></a>
        <a href="/Home/hapus_users/<?= $key->nis?>">
          <button type="button" class="btn btn-danger" style="border-radius: 50%; background-color: transparent; border-color: : 1px red;"><i class="fas fa-trash"></i> </button></a>
      </td> -->
    </tr>
  <?php } ?>
</table>
</div>
    </div>