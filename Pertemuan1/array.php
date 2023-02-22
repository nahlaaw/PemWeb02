<?php
// array indeks
$animals = ['Kambing', 'Kucing', 'Ayam'];

// akses array

foreach($animals as $animal){
    echo $animal . '<br>';
}

// array assosiatif
$student = [
    'name' => 'Nahla Putri',
    'major' => 'Informatics',
    'age' => 19
];

echo $student['name'];