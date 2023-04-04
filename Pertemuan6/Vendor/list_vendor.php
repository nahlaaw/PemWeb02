<?php 
    require_once '../dbkoneksi.php';
?>

<?php 
    $sql = "SELECT * FROM vendor";
    // execute the query
    $rs = $dbh->query($sql);
?>

<br>
<div class="container">
<a class="btn btn-success" href="form_vendor.php" role="button">Tambah Vendor</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nomor</th>
      <th>Nama</th>
      <th>Kota</th>
      <th>Kontak</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
            $id = 1;
            foreach($rs as $row) {
        ?>
    <tr>
      <td><?=$id?></td>
      <td><?=$row['nomor']?></td>
      <td><?=$row['nama']?></td>
      <td><?=$row['kota']?></td>
      <td><?=$row['kontak']?></td>
      <td>
        <a class="btn btn-primary" href="view_vendor.php?id=<?=$row['id']?>">View</a>
        <a class="btn btn-primary" href="form_vendor.php?id=<?=$row['id']?>">Edit</a>
        <a class="btn btn-primary" href="delete_vendor.php?id=<?=$row['id']?>"
          onclick="if(!confirm('Anda Yakin Hapus Data Vendor <?=$row['nama']?>?')) {return false}">Delete</a>
      </td>
    </tr>
    <?php 
            $id++;   
            } 
        ?>
  </tbody>
</table>