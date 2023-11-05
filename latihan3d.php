<?php
function faktorial ($a){
    if ($a === 0) {
        return 1;
    } else {
        return $a * faktorial ($a - 1);   
    }
} 
$angka = 5;
$hasil = faktorial ($angka);

echo " faktorial dari {$angka} adalah {$hasil}";