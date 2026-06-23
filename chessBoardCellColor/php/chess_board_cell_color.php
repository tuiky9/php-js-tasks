<?php

declare(strict_types=1);

namespace ChessBoardCellColor;

class Solution
{
    public static function solution($cell1, $cell2)
    {
        return array_sum([ord($cell1[0]),ord($cell2[0]),$cell1[1],$cell2[1]]) % 2 === 0;
    }
}
