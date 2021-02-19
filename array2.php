<?php
//pengulangan pada array
//foreach
$angka = [3, 5, 7, 9, 11, 13, 15, 17, 19];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    /* membuat enter */
    .clear{
        clear:both;
    }
    </style>
</head>
<body>
<?php for($x=0; $x < 7; $x++){?>
    <!-- div untuk mengelompokan elemen2 atau tag2 agar menjadi satu grup -->
    <div class="kotak"><?=$angka[$x]; ?></div>
    <?php }?>

    <div class="clear"></div>

<!-- dengan menggunakan count() mka apabila kita menambahkan angka, kotaknya 
pun akan terbuat dengan otomatis -->
    <?php for($x=0; $x < count($angka); $x++){?>
    <div class="kotak"><?=$angka[$x]; ?></div>
    <?php }?>

    <div class="clear"></div>

    <!-- dg foreach -->
    <?php foreach($angka as $a){?>
        <div> class = "kotak"><?= $a;?> </div>
    <?php }?>
    
</body>
</html>