<?php
$mahasiswi =[
    ["Rosalina", "332123565", "Teknik Informatika", "rosalina250102@gmail.com"],
    ["Rosiana", "332123565", "Teknik Informatika", "rosiana@gmail.com"],
    ["Anindya", "332123565", "Teknik Informatika", "anindyakhair@gmail.com"],
];

//manggil diva
echo $mahasiswi[2][0];
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
    <li>Nama : <?= $m[0]?></li>
    <li>NIM : <?= $m[1]?></li>
    <li>Jurusan : <?= $m[2]?></li>
    <li>Email : <?= $m[3]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>