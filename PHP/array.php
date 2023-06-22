<?php

$values = array(10, 9, 8, 7, 5);
// var_dump($values);

//Membuat array dan menampilkan array beserta nilainya melalui index nya
$names = ["giri", "dwi", "antara"];
var_dump($names[1]);

//merubah isi array lewat indexnya
$names[0] = "Rinda";
var_dump($names[0]);

//menghapus nilai asset lewat indexnya
unset($names[2]);
// var_dump($names);

//menambahkan value dari array 
$names[] = "man";
var_dump($names[3]);

//Array dan Map di php

//Format normal array normal sebagai berikut :
// $giri = array(
//     0 => "rinda",
//     1 => "dwi",
//     2 => "antara",
//     3 => 26
// );

//Format Map. Nilai index yang biasanya angka, bisa diganti dengan format yang lebih spesifik
$giri = array(
    "id" => "rinda",
    "name" => "dwi",
    "alias" => "antara",
    "umur" => 26
);
// var_dump($giri);

//cara mengambil nilai spesifik array, maka index yang digunakan juga harus sesuai index yang dibuat
var_dump($giri["id"]);

//cara lain membuat MAP
$budi = [
    "id" => "budi",
    "nama" => "budi haryanto",
    "umur" => 25,
];
// var_dump($budi);


//Nested array, array dalam array
$mega = [
    "id" => "mega",
    "nama" => "mega haryanto",
    "umur" => 25,
    "alamat" => [
        "kota" => "Jogja",
        "negara" => "Indonesia"
    ]
];
var_dump($mega);
//cara mengakses nilai array di dalam array
//ambil index "alamat", lalu index "kota", maka akan sepesifik mengambil nilai kota
var_dump($mega["alamat"]["kota"]);

