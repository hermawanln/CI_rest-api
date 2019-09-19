<?php

// $mahasiswa = [
//     [
//         "nama" => "Hermawan Luthfi Nugroho",
//         "nrp" => "23532532525",
//         "email" => "hermawan.luthfi@gmail.com"
//     ],
//     [
//         "nama" => "fbfbfsbsfb",
//         "nrp" => "sdbsdbb",
//         "email" => "sdbsdbsbsdb@gmail.com"
//     ],
//     [
//         "nama" => "zbcbzxxb",
//         "nrp" => "334gerg54g",
//         "email" => "grfxnbssherh@gmail.com"
//     ]
        
// ];

// test untuk output mahasiswa dan hasilnya array asossiative
// var_dump($mahasiswa);

// ubah array mahasiswa ke dalam bentuk json
// $data = json_encode($mahasiswa);
// echo $data;

// MENCOBA MENGUBAH DATA YANG DIAMBIL DARI DATABASE MENJADI JSON  //

    $dbh = new PDO('mysql:host=localhost; dbname=riset_konsolidasi_ta', 'root', '');

    $db = $dbh->prepare("SELECT * FROM unit_kerja");

    $db->execute();

    $unit_kerja = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($unit_kerja);
    echo $data;

?>