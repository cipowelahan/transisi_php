<?php

function rataRata($nilai) {
    $data = explode(" ", $nilai);
    return array_sum($data)/count($data);
}

function tujuhTerbesar($nilai) {
    $data = explode(" ", $nilai);
    sort($data);
    $slice = array_slice($data, -7, 7);
    return $slice;
}

function tujuhTerkecil($nilai) {
    $data = explode(" ", $nilai);
    sort($data);
    $slice = array_slice($data, 0, 7);
    return $slice;
}

$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

echo rataRata($nilai);
echo '<br/>';
print_r(tujuhTerkecil($nilai));
echo '<br/>';
print_r(tujuhTerbesar($nilai));