<?php

declare(strict_types=1);

namespace FileNaming;

class Solution
{
    public static function solution($names)
    {


        foreach ($names as $i => $name) {
            $c = 1;
            $newNames = array_slice($names, 0, $i);

            while (in_array($names[$i], $newNames)) {
                $names[$i] = $name . '(' . $c++ . ')';
            }
        }

        return $names;
    }
}
