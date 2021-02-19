<?php
//date()
//untuk menampilkan tanggal dg format tertentu
date_default_timezone_get("Asia/jakarta");
echo date("l, d m y");
echo "<br>";
echo date("H:i:s");
echo "<br>";

//detik yang sudah berlalu sejak 1 january 1970
echo time();
echo"<p>";

//1000 hari yang lalu
echo date("l, d M Y", time()-60*60*24*1000);
echo"<p>";

//100 hari kedepan
echo date("l, d M Y", time()+60*60*24*100);
echo "<p>";

//strtotime
//string to time
echo date("l", strtotime("25 January 2002"));

?>