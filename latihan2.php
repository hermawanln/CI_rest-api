<?php

// ambil data dari file lain
$data = file_get_contents('json/coba.json');

// ubah jadi array
$mahasiswa = json_decode($data, true);
echo "<pre>";
var_dump($mahasiswa);
echo "</pre>";

echo "============================================================================================<br>";
echo $mahasiswa[0]['pembimbing']['pembimbing1'];
?>