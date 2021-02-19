<?php
//array
//variable yang memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//array = pasangan antara key dan value
//key=index, dimulai dari 0

//membuat array
//cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru []
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "text", true];

//cara mencetak array
//untuk debugging
var_dump($bulan);
echo "<p>";
print_r($bulan);

echo "<p>";

echo $bulan[1];

echo "<p>";

//menambahkan elemen baru pada array
$bulan[]="April";
var_dump($bulan);
?>