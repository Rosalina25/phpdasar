
<?php
//untuk menyetak sebuah text
//petik satu dan petik dua sama2 digunakan, tetapi lbh baik petik dua(lebih aman)
echo "Hello World!";
//untuk baris baru
echo "<p>"; //buat enter
echo "Hello World!";

//ini komentar
/*
1. php di dalam html
2. html di dalam php
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- php didalam html -->
    <h1>Selamat datang oca!<?php echo "oca"?></h1> 

    <!-- html didalam php -->
     <?php echo"<h1>oca </h1>"?>
</body>
</html>