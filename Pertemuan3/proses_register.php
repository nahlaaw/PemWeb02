<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

function skor_skill($skills){
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 30,
        'Phyton' => 30,
        'Java' => 50,
    ];
    $result = 0;
    foreach($skills as $skill){
        $result = $result + $skill_list[$skill];
    }
    return $result;
}
$skor = skor_skill($skill);

function kategori_skill($kategori){
    $kategori_skill = '';
    if ($kategori == 0){
        $kategori_skill = 'Tidak Memadai';
    } else if ($kategori <= 40){
        $kategori_skill = 'Kurang';
    } else if ($kategori <= 60){
        $kategori_skill = 'Cukup';
    } else if ($kategori <= 100){
        $kategori_skill = 'Baik';
    } else if ($kategori <= 150){
        $kategori_skill = 'Sangat Baik';
    }
    return $kategori_skill;
}
$Kategori = kategori_skill($skor);

echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Jenis Kelamin: $gender";
echo "<br> Program Studi: $prodi";
echo "<br> Skill Programming: ";
foreach($skill as $skil){
    echo $skil . ", ";
}
echo "<br> Tempat Domisili: $domisili";
echo "<br> Email: $email";

echo "<br> Skor Skill: " . skor_skill($skill);
echo "<br> Kategori Skill: $Kategori";