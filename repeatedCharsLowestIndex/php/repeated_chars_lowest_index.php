<?php

declare(strict_types=1);

namespace RepeatedCharsLowestIndex;

function solution(string $str): ?string
{
    $arr = [];
    for ($i = 0; $i < strlen($str); $i++) {
        if (!isset($arr[$str[$i]])) {
            $arr[$str[$i]] = 1;
        } else {
            $arr[$str[$i]]++;
        }
    }

    foreach ($arr as $key => $value) {
        if ($value > 1) {
            return $key;
        }
    }

    return null;
}
