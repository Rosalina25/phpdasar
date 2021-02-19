<?php
$data= mysqli_connect("localhost", "root", "", "db_phpdasar");

$result= mysqli_query($data, "SELECT * FROM tb_alam");
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body width="100%">
    <h1> List of Natural Destinations </h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Category</th>
            <th>Address</th>
            <th>Description</th>

        </tr>
        <?php $no =1;?>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
        
        <tr>
            <td><?= $no; ?></td>
            <td><img src="image/<?= $row["gambar_alam"];?>" width="50"></td>
            <td><?= $row["category_alam"];?></td>
            <td><?= $row["alamat_alam"];?></td>
            <td style = "padding: 5px;"><?= $row["desc_alam"];?></td>


        </tr>
            <?php $no++ ?>
        <?php endwhile;?>
    </table>    
</body>
</html>