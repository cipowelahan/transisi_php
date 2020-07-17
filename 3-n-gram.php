<?php

function nGram($teks, $n) {
    $data = [];
    $arr_teks = explode(" ", $teks);
    $count_arr = count($arr_teks);

    if ($count_arr <= $n) {
        $data = $arr_teks;
    }
    else {
        for ($i=0; $i < $count_arr; $i++) {
            $slice_teks = array_slice($arr_teks, $i, $n);
            array_push($data, $slice_teks);
            if (($i + $n) == $count_arr) break;
        }
    }

    $result = [];
    foreach($data as $d) {
        array_push($result, implode(" ", $d));
    }

    return $result;
}

function formatTeks($teks) {
    $data = [
        'Unigram' => implode(", ", nGram($teks, 1)),
        'Bigram' => implode(", ", nGram($teks, 2)),
        'Triigram' => implode(", ", nGram($teks, 3))
    ];

    foreach ($data as $key => $value) {
        echo "<li>$key : $value</li>";
    }
}

$teks = "Kembalinya raja lele dari perang melawan merpati putih";

formatTeks($teks);