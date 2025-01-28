<?php

$nomor_induk=[[13,01,10],[10,10,66]];
$nomor_barang=[[[1,20,46],[7,11,2]],[[7,3,90],[8,60,1]]];
echo $nomor_induk[0][1]."<br>";
echo $nomor_induk[1][2]."<br>";
echo $nomor_barang[0][0][1]."<br>"; //20
echo $nomor_barang[1][1][1]."<br>"; //60
foreach ($nomor_barang as $barang){ foreach($barang as $bar){ foreach($bar as $ba){ echo $ba." ";} } }

//array associative : penggantian nama index, sebelumnya pakai koordinat sekarang jadi sesuai keinginan
//contoh :  di bawah ini dikasih nama pertama(ketikkan dalam tanda kutip ")
$array1d=["pertama"=>1,"dua"=>2,3];
echo "<br>"."<br>".$array1d["pertama"];
echo "<br>".$array1d["dua"];

$siswa=[
    ["NIS"=>123,"nama_siswa"=>"siti","kelas"=>10],
    ["NIS"=>345,"nama_siswa"=>"rudi","kelas"=>12]
];
echo "<br>".$siswa[0]["nama_siswa"]."<br>";
foreach ($siswa as $sis){ 
    echo $sis["nama_siswa"]."<br>";
}
// yg contoh di atas itu: karena sudah dikasih nama, maka foreach nya sekali aja

