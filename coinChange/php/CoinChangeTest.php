<?php

declare(strict_types=1);

use CoinChange\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CoinChangeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testCoinChange(array $coins, int $amount, int $expected): void
    {
        self::assertSame($expected, Solution::coinChange($coins, $amount));
    }

    public static function provideCases(): array
    {
        return [
            'coins 1 2 5 amount 11' => [[1, 2, 5], 11, 11],
            'single coin cannot make amount' => [[2], 3, 0],
            'zero amount with coin' => [[1], 0, 1],
            'unordered coins amount 28' => [[7, 2, 3], 28, 14],
            'coins 5 10 amount 20' => [[5, 10], 20, 3],
            'zero amount without coins' => [[], 0, 1],
            'coins 1 4 3 amount 50' => [[1, 4, 3], 50, 121],
            'five denominations amount 73' => [[9, 6, 5, 4, 2], 73, 1_024],
            'coins 98 70 15 amount 175' => [[98, 70, 15], 175, 1],
            'readme example' => [[1, 2, 3], 4, 4],
            'large amount four denominations' => [[10, 25, 50, 100], 1_000, 946],
            'amount 5000 with coins 1 2' => [[1, 2], 5_000, 2_501],
            'impossible amount 97' => [[19, 23, 58, 73], 97, 0],
            'unordered large denominations amount 453' => [[53, 250, 21, 45], 453, 4],
            'mixed denominations amount 987' => [[199, 50, 78, 12], 987, 21],
            'impossible amount 895' => [[275, 198, 435, 11], 895, 0],
            'large amount 4300' => [[81, 67, 29, 14], 4_300, 6_422],
            'large denominations amount 4510' => [[512, 272, 344, 62], 4_510, 16],
            'impossible large amount 3685' => [[725, 410, 982, 630], 3_685, 0],
            'currency denominations amount 5000' => [[500, 1_000, 2_000, 5_000], 5_000, 13],
        ];
    }

    public function testRejectsNegativeAmount(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The target amount cannot be negative.');

        Solution::coinChange([1, 2], -1);
    }

    #[DataProvider('provideInvalidCoins')]
    public function testRejectsNonPositiveCoin(int $coin): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Coin denominations must be positive integers.');

        Solution::coinChange([1, $coin], 5);
    }

    public static function provideInvalidCoins(): array
    {
        return [
            'zero denomination' => [0],
            'negative denomination' => [-2],
        ];
    }
}
