<?php

$data = [];

// $data =[
//     "action" => "Create"
// ]
//Bila data diatas diggunakan, maka "Create" akan tampil
if(isset($data['action'])){
    $action = $data['action'];
}else {
    $action = 'nothing';
}

echo $action;


//Null Coelascing
$isi = [];

// $isi =[
//     "action" => "Create"
// ]
//Bila data diatas diggunakan, maka "Create" akan tampil
$aksi = $isi["action"] ?? "nggak ada";

echo $aksi. PHP_EOL;