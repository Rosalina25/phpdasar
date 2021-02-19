<?php
//operator penggabung string
//dg tandanya adl .


$nama1 = "Rosalina";
$nama2 = "Saputri";

echo $nama1." ".$nama2;
echo "<p>";

//operator aritmatika
//+ - * / %
$x=30;
$y=15;
echo "hasil dari $x + $y = ";
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x * $y;
echo "<br>";

//operator assigment
//=, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x; 
echo "<br>";

$nama = "Rosalina";
$nama .= " ";
$nama .= "Saputri";
echo $nama;
echo "<p>";

//operator perbandingan
//<, >, <=, >=, ==, !=

var_dump(1 == "1" );
echo "<br>";

//operator identitas
//==,!==
var_dump (1 === "1");

?>