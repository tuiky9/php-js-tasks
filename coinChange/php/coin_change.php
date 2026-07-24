<?php

declare(strict_types=1);

namespace CoinChange;

use InvalidArgumentException;

final class Solution
{
    /**
     * @param list<int> $coins
     */
    public static function coinChange(array $coins, int $amount): int
    {
        if ($amount < 0) {
            throw new InvalidArgumentException('The target amount cannot be negative.');
        }

        foreach ($coins as $coin) {
            if ($coin <= 0) {
                throw new InvalidArgumentException('Coin denominations must be positive integers.');
            }
        }

        $ways = array_fill(0, $amount + 1, 0);
        $ways[0] = 1;

        foreach ($coins as $coin) {
            for ($currentAmount = $coin; $currentAmount <= $amount; $currentAmount++) {
                $ways[$currentAmount] += $ways[$currentAmount - $coin];
            }
        }

        return $ways[$amount];
    }

    /**
     * @param list<int> $coins
     */
    public static function solution(array $coins, int $amount): int
    {
        return self::coinChange($coins, $amount);
    }
}
