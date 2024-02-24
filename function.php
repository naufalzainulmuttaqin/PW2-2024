<?php
// function selalu ada ini ()
// Function (wadah kodingan) untuk menghitung luas segitiga
// function wadah(tagnya) {nilai tagnya}
function luas_segitiga($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    echo "luas segitiganya: ".$luas;
}

luas_segitiga(2, 10);