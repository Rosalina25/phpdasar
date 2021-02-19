<?php
date_default_timezone_get("Asia/jakarta");
$jam = date ("H:i");
//kalo jamnya itu lebih besar dari jam 3 dan lebih kecil dari jam 10 maka dia pagi
if($jam> "03.00" && $jam <"10.00"){
    $waktu = "pagi";

}elseif($jam> "10.00" && $jam < "15.00"){
    $waktu = "siang";

}elseif($jam > "15.00" && $jam < "18.00"){
    $waktu = "sore";

}else{
    $waktu = "malam";
}
echo "selamat $waktu ocha:)"


?>