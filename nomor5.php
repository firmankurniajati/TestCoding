<?php

//Nomor 5 menghitung karakter terbanyak

function karakterTerbanyak($kata){
    $karakter = str_split($kata);
    $hitungKarakter = array_count_values($karakter);
    arsort($hitungKarakter);

    $karakterTerbanyak = key($hitungKarakter);
    $kemunculanTerbanyak = current($hitungKarakter);
    return "$karakterTerbanyak $kemunculanTerbanyak" . "x";
}

echo karakterTerbanyak('wellcome');
echo karakterTerbanyak('strawberry)');