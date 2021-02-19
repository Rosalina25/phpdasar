<?php


//for
/*
for()
1. inisialisasi = nilai awal
2. kondisi terminasi = pemberhentian pengulangan
3. increment atau decrement = menentuan pengulangan maju atau mundur
*/
for($i = 0; $i < 5; $i++){
    echo "hello world! <br>";
}

//while
//kalo kondisinya true, lakukan yang didalam kurung kurawal
//kalau false maka tidak melakukan apapun
//cek dulu baru jalanin
$f = 10;
while($f < 5){
    echo "hello! <br>";
    $f++;
}

//do while
//lakukan hal ini selama kondisinya true
//jika false maka hanya nyetak satu kali
//jalankan dulu baru cek kondisi
$y = 10;
do{
echo "hello world!!<br>";
$y++;
}while($y < 5);

?>