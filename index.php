<?php

echo inttoroman(58);

function inttoroman($number) {
    $romanvalue = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    $roman = array_keys($romanvalue);
    $value = array_values($romanvalue);

    $result = '';

    for ($i = 0; $i < count($roman); $i++) {
        while ($number >= $value[$i]) {
            $number -= $value[$i];
            $result .= $roman[$i];
        }
    }

    return $result;
}
