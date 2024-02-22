<?php

//NOMOR 3 , ARRAY ASSOSIATIF

function getStatus($nilai){
    $color = ['merah','kuning','hijau'];
    $index = $nilai % count($color);
    return $color[$index];
}
//Perualangan karena terus menerus dipanggil
for ($i=1; $i<=10; $i++){
    echo "Panggilan ke- $i ". getStatus($i);
}
