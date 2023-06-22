<?php

$nilai = 60;
$absen = 65;

//Nilai dan absen terpenuhi, maka statement dikeluarka
if ($nilai >= 75 && $absen >= 80 ){
    echo "Selamat Anda Lulus" . PHP_EOL;
}

//Kode else dieksekusi karena kondisi nilai(true) tidak terpenuhi
//kondisi false terpenuhi
if ($nilai >= 80 && $absen >= 95 ){
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
}

//if else statement
if ($nilai >= 80 && $absen >= 80 ){
    echo "Selamat Anda Mendapat A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Selamat Anda Mendapat B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Selamat Anda Mendapat C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Selamat Anda Mendapat D" . PHP_EOL;
} else {
    echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
}


