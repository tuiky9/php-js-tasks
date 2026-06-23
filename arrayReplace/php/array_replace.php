<?php

declare(strict_types=1);

namespace ArrayReplace;

class Solution
{
    public static function solution($inputArray, $elemToReplace, $substitutionElem)
    {
        foreach ($inputArray as $k => $v) {
            if ($v === $elemToReplace) {
                $inputArray[$k] = $substitutionElem;
            }
        }
        return $inputArray;
    }
}
