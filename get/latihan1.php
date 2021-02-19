<?php
//lingkup variable
$x = 10;  //variable local

function tampilX(){
    global $x;
    echo $x;
}

tampilX();

?>