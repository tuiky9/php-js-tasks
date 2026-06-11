<?php

class Solution
{
    public static function solution($numbers, $k)
    {
        $subArraysCount = ceil(count($numbers) / $k);
        
        $newArray = [];
        for ($i = 0; $i < $subArraysCount; $i++) {
            $newArray = array_merge(
                $newArray,
                array_reverse(array_slice($numbers, $i * $k, $k)),
            );
        }
        
        return $newArray;
    }
}
