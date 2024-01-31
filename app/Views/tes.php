<!DOCTYPE html>
<html>
<head>
  <title>SPP</title>
</head>
<body>
 <table border="1">
   <tr>
    <th>#</th>
      <th>Code</th>
    <th>Keterangan</th>
    <th>Jumlah Harga</th>
    <th>Status Yang Lunas</th>
  </tr>
  <?php
    $no=1;
    foreach ($tampil as $key) {
    ?>
    <tr>
      <td><?php echo $no++;?>.</td>
          <td><?php echo $key->code;?></td>
      <td><?php echo $key->bulan;?></td>
      <td>Rp. <?php echo $key->jumlah?></td>
      <td><?php echo $key->status;?></td>
    </tr>
  <?php }?>
 </table>
</body>
</html>