<?php

declare(strict_types=1);

namespace MakeArrayConsecutive;

class Solution
{
    public static function solution($statues)
    {
        $statuesSorted = sort($statues);

    //generate a new array to intersect $statues,
    //find upper and lower boundries for new array from $statues
        for ($i = min($statues); $i <= max($statues); $i++) {
            $allStatues[] = $i;
        }

        $requiredStatues = array_diff($allStatues, $statues);

        return sizeof($requiredStatues);
    }
}
