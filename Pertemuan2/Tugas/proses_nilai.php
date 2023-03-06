<?php 
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];
$praktikum = $_POST["praktikum"];
$grade = ($uts + $uas + $praktikum) / 3;

echo "Nama: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Praktikum: $praktikum <br>";
echo "Rata-rata Nilai: " . round ($uts + $uas + $praktikum) / 3;
echo "<br> Grade: ";
    if ($grade >= 85) {
    echo "A";
    } elseif ($grade >= 70) {
    echo "B";
    } elseif ($grade >= 56) {
    echo "C";
    } elseif ($grade >= 36) {
    echo "D";
    } elseif ($grade >= 0) {
    echo "E";
    } elseif ($grade <= 0) {
    echo "Invalid";
    } elseif ($grade >= 100) {
    echo "Invalid";
    }
?>