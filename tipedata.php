<?php
$hiu =  "komputer";
echo $hiu ."<br>";

// inisiasi variabel menghasilkan jawaban $a ---> 100

$plat_nomer_awal = "P";
$plat_nomer_tengah = 1;
$plat_nomer_akhir = 1;
$b = 5;
echo $a+$b ."<br>";

$a = "6a";
$b = "2a";
echo $a.$b ."<br>";

$a = 8 * 4;
$b = "d";
echo $a.$b ."<br>";

$a = "6a";
$b = "2a";
// echo $a+$b ."<br>";  

$batrai = 100;
echo $batrai;
// untuk $ hanya bisa dipakai bolak balik dan bisa dirubah

const baterai = 50;
echo baterai;
// untuk const hanya bisa dipakai sekali dan tidak bisa dirubah

const baterai = 40;
echo baterai."<br>"."<br>";

$array = [8,"*",9,"punya saya",true,];
echo $array[0]."<br>";
// array : menampung banyak data campuran termasuk :string " ", desimal, bolean,dll
// array menggunakan perhitungan koordinat(nama lain index) yg dimulai dari 0(dan sesuai isi di dalam kurung kotak [])
// echo $array[0]."<br>"; ----- untuk menampilkan satu satu sesuai index
foreach($array as $data){
    echo $data ."<br>"."<br>"."<br>";
}
// contoh array dalam matematika : himpunan

$kode_awal = "P";
$kode_tengah = 1234;
$kode_akhir = "AB";
$plat_nomer_sepeda = [$kode_awal, $kode_tengah, $kode_akhir];
foreach($plat_nomer_sepeda as $plat){
    echo $plat ." ";
}

$data2 = [[30,6,9],[7,87,1]];
echo $data2[0][2]."<br>"."<br>";
echo $data2[1][0]."<br>"."<br>";
echo $data2[0][1]."<br>"."<br>";
// untuk memanggil data array dua dimensi(array di dalam array) : [urutan index paling luar][urutan index lapisan ke-1,.. sampai berikutnya]

foreach($data2 as $data_sekarang){
    foreach($data_sekarang as $data){
        echo $data."<br>";
    }
}
// untuk memanggil 2 array : foreach 2 kali
// foreach($data2 as $data_sekarang){
//     foreach($data_sekarang as $data){
//         echo $data;
//     }
// }

// echo $plat ." "; --->muncul untuk tiap koordinat/index

// foreach($array as $data){
//     echo $data ."<br>";
// } --------> untuk menampilkan barengan


// FLOAT = DISIMAL (PAKAI TITIK)
// INTEGER = ANGKA
// BIG INTEGER
// CHAR = 1 HURUF
// STRING = lebih pendek " "
// TEKS = lebih panjang
// ARRAY = menyimpan banyak tipe data dan campur []
// HIMPUNAN / ARRAY DUA DIMENSI ATAU LEBIH : ARRAY di dalam ARRAY [[],[],[]]

// BAHASA rush = keamanan + kecepatan -> compile biner

$orang = [ 
    [
        [20,15,90],
        [7,10,3]],
    [
        [26,180,92],
        [27,610,233]
    ]
    ];

echo $orang[1][1][1]."<br>"."<br>";


// array ASSOCIATIVE

?>