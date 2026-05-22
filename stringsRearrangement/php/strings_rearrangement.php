<?php

function stringsRearrangement($i)
{
    $x = 0;

    foreach ($i as $v) {
        $o = 0;
        foreach ($i as $z) {
            $o += levenshtein($v, $z) == 1;
        }

        if (!$o || $o > 4) {
            return false;
        }

        $x += $o < 2;
    }

    return $x < 3;
}
