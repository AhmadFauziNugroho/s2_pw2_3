<?php

function hitung_umur($tahun_lahir = 2003, $tahun_sekarang = 2023){

$hitung_umur = $tahun_sekarang - $tahun_lahir;
echo $hitung_umur;
}

hitung_umur(2003,2023);
echo "<br>";

hitung_umur(1996,2023);
echo "<br>";

hitung_umur(1918,2023);
echo "<br>";

hitung_umur();
echo "<br>";

// fungsi kedua
function greeting($nama){
    return "Hai, namaku $nama !";
}
echo "<br>";echo "<br>";

echo greeting("Fauzi");
echo "<br>";
echo "Umur saya: ";
hitung_umur();
