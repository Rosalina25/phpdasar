<?php
//koneksi ke database
//host, user, pw, nama database
$db= mysqli_connect("localhost", "root", "", "db_phpdasar");

//ambil data dari table
$result= mysqli_query($db, "SELECT * FROM tb_mahasiswa");
var_dump ($result);

//mysqli_fetch_row()=mengembalikan nilai dg array numerik
//mysqli_fetch_assoc()= mengembalikan array asosiasi
//mysqli_fetch_array()= mengembalaikan kedua array
//mysqli_fetch_object()= mengembalikan object

//fetch data/ambil data
//while ($result_mhs = mysqli_fetch_assoc($result)){
 //   var_dump($result_mhs);
//}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)):?>
        <?php $no =1;?>
        <tr>
            <td><?= $no; ?></td>
            <td><img src="img/img/<?= $row["gambar_mahasiswa"];?>" width="50"></td>
            <td><?= $row["nama_mahasiswa"];?></td>
            <td><?= $row["nim_mahasiwa"];?></td>
            <td><?= $row["jurusan_mahasiswa"];?></td>
            <td><?= $row["email_mahasiswa"];?></td>
         
        </tr>
            <?php $no++ ?>
        <?php endwhile;?>
    </table>    
</body>
</html>