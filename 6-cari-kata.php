<?php

function cari($arr, $teks) {
    $arr_char = str_split($teks);

    foreach ($arr_char as $char) {
        $flag = true;

        foreach ($arr as $list_char) {
            if (in_array($char, $list_char)) {
                $flag = false;
                break;
            }
        }

        if ($flag) return false;
    }
    return true;
}

$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

$cari = cari($arr, 'fgtu');

echo ($cari?'true':'false');