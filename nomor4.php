<?php

//Nomor 4, mendapatkan nilai terbesar kedua

function besarKedua($array){
    rsort($array);
    $setArray = array_unique($array);
    return $setArray;
}

$array = [23,4,21,4,10];
echo "Nilai terbesar kedua : " . besarKedua($array);
