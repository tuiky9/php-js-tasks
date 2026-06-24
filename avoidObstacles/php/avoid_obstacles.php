<?php

declare(strict_types=1);

namespace AvoidObstacles;

class Solution
{
    public static function solution(array $inputArray)
    {
        for ($i = 2; $i < 100000; $i++) {
            $blocked = false;
            foreach ($inputArray as $value) {
                if ($value % $i === 0) {
                    $blocked = true;
                    break;
                }
            }
            if (!$blocked) {
                return $i;
            }
        }
    }
}
