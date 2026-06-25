<?php

declare(strict_types=1);

namespace DigitsProduct;

class Solution
{
    public static function solution(int $product)
    {
        for ($i = 1; $i <= 9999; $i++) {
            $digits = str_split((string) $i);
            $digitProduct = 1;

            foreach ($digits as $digit) {
                $digitProduct *= (int) $digit;
            }

            if ($digitProduct === $product) {
                return $i;
            }
        }

        return -1;
    }
}
