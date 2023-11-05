<?php

function soal ($suuii){

    $jawabanIsset = " Isset adalah =  aku adalah seorang binaragawan <br><br>";
    $jawabanEmpty = " Empty adalah = aasfas       ";


    echo  "<p style = '$suuii'> $jawabanIsset </P>";
    echo  "<p style = '$suuii'> $jawabanEmpty </P>";                              
}
soal( "font-size: 20px; font-familly: Arial; color: #1A0547 ");
?>