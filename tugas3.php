<?php

$nilai =  85;

if($nilai > "90" && $nilai <"100"){
    $nilai = "A";

}elseif($nilai > "80" && $nilai < "90"){
    $nilai = "B";

}elseif($nilai > "70" && $nilai < "80"){
    $nilai = "C";

}else{
    $nilai = "D";
}

echo "Nilaimu adalah $nilai";
?>