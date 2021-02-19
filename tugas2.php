<?php
date_default_timezone_set("Asia/jakarta");
$jam = date ("H:i");

if($jam > "04.00" && $jam <"05.00"){
    $waktu = "subuh";

}elseif($jam > "12.00" && $jam < "14.00"){
    $waktu = "dhuhur";

}elseif($jam > "15.00" && $jam < "16.30"){
    $waktu = "ashar";

}elseif($jam > "18.00" && $jam < "19.00"){
    $waktu = "maghrib";

}elseif($jam > "19.00" && $jam < "24.00"){
    $waktu = "isya";

}else{
    $waktu = "bukan untuk sholat fardhu";
}

echo "Waktu $waktu";
?>