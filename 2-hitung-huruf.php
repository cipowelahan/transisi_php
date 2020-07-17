<?php

function jumlahHurufKecil($text) {
    $jumlah = preg_match_all('/[a-z]/m', $text);
    return "\"$text\" mengandung $jumlah buah huruf kecil";
}

$text = 'Malam Jumat JAM DELAPAn';

echo jumlahHurufKecil($text);