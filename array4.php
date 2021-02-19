<?php
//array asosiatif
$mahasiswi =[
    ["nama"=> "Rosalina",
    "nim"=> "332123565", 
    "jurusan"=> "Teknik Informatika", 
    "email"=>"rosalina250102@gmail.com"],

    ["nim"=>"332123565",
    "nama"=> "Rosiana", 
    "jurusan"=> "Teknik Informatika", 
    "email"=> "rosiana@gmail.com"],

    ["nama"=> "Anindya",
    "nim"=> "332123565", 
    "jurusan"=> "Teknik Informatika",
    "email"=> "anindyakhair@gmail.com"]
];

//manggil diva
echo $mahasiswi["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswi as $m):?>
    <ul>
    <li>Nama : <?= $m["nama"]?></li>
    <li>NIM : <?= $m["nim"]?></li>
    <li>Jurusan : <?= $m["jurusan"]?></li>
    <li>Email : <?= $m["email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>