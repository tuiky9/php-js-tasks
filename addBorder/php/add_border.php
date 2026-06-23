<?php

declare(strict_types=1);

namespace AddBorder;

class Solution
{
    public static function solution(array $picture): array
    {
        foreach ($picture as $k => $v) {
            $picture[$k] = '*' . $v . "*";
        }
        $asterisks = str_pad("", strlen($picture[0]), "*");
        array_push($picture, $asterisks);
        array_unshift($picture, $asterisks);

        return $picture;
    }
}
