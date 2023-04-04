<?php 
require_once '../dbkoneksi.php';

$_nomor = $_POST['nomor'];
$_nama = $_POST['nama'];
$_kota = $_POST['kota'];
$_kontak = $_POST['kontak'];

$_proses = $_POST['proses'];

$ar_data[]=$_nomor;
$ar_data[]=$_nama;
$ar_data[]=$_kota;
$ar_data[]=$_kontak;

if($_proses == "Simpan"){

    $sql = "INSERT INTO vendor (nomor,nama,kota,kontak) VALUES (?,?,?,?)";
}else if($_proses == "Update"){

    $ar_data[]=$_POST['id'];
    $sql = "UPDATE vendor SET nomor=?,nama=?,kota=?,kontak=? WHERE id=?";
}

if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:list_vendor.php');
?>