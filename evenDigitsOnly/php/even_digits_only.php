<?php

declare(strict_types=1);

namespace EvenDigitsOnly;

class Solution
{
    public static function solution($n)
    {
        $isEven = true;

        foreach (str_split((string) $n) as $d) {
            if ($d % 2 !== 0) {
                $isEven = false;
                break;
            }
        }
        return $isEven;
    }
}
