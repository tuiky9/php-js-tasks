<?php

declare(strict_types=1);

namespace BishopAndPawn;

class Solution
{
    public static function solution($bishop, $pawn)
    {

        $x = array_flip(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h']);

        return abs($x[$bishop[0]] - $x[$pawn[0]]) == abs((int) $bishop[1] - (int) $pawn[1]);
    }
}
