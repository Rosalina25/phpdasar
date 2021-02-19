<?php
//superglobal variable
//array assosiative
//var_dump ($_SERVER);

//$_GET
//$_GET["nama"] = "Oca";
//var_dump($_GET)
$mahasiswa = [
    ["nama" => "Rosalina",
    "nim" => "123456",
    "jurusan" => "Teknik Informatika"],

    [
        "nama" => "Putri",
    "nim" => "234567",
    "jurusan" => "Teknik Informatika"],

    [
        "nama" => "Diva",
    "nim" => "34567",
    "jurusan" => "Teknik Informatika"]

    ];

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
    <ul>
     <?php foreach($mahasiswa as $m):?>
        <li>
        <!-- ngirim data -->
            <a href="latihan3.php?nama=<?= $m["nama"] ?>
            &nim=<?= $m["nim"]?>
            &jurusan=<?= $m["jurusan"]?>">
             <?= $m["nama"];?>
        </li>
      <?php endforeach;?>
      </ul>
</body>
</html>