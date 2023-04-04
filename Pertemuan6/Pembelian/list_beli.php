<?php
require_once '../dbkoneksi.php';
?>

<?php
$sql = "SELECT * FROM pembelian";
$rs = $dbh->query($sql);
?>

<br>
<div class="container">
<a class="btn btn-success" href="form_beli.php" role="button">Tambah Pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($rs as $row) {
        ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['nomor'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td>
                <a class="btn btn-primary" href="view_beli.php?id=<?= $row['id'] ?>">View</a>
                <a class="btn btn-primary" href="form_beli.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="btn btn-primary" href="delete_beli.php?id=<?= $row['id'] ?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Pembelian <?= $row['nomor'] ?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>