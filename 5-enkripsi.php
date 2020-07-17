<?php

function enkripsi($teks) {
    $teks = str_replace(' ', '', strtoupper($teks));
    $arr_teks = str_split($teks);

    $alphabet = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];

    $result = [];

    for ($i = 1; $i <= count($arr_teks); $i++) {
        $index = array_search($arr_teks[$i-1], $alphabet);
        $next_index = ($i%2 == 1) ? $index + $i: $index - $i;
        $next_index %= 26;
        $next_index = ($next_index < 0) ? $next_index + 26: $next_index;
        array_push($result, $alphabet[$next_index]);
    }

    return implode('', $result);
}

echo enkripsi('DFHKNQ');