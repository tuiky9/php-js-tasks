<?php

declare(strict_types=1);

use ShortestRoute\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ShortestRouteTest extends TestCase
{
    /**
     * @param list<int> $obstacles
     */
    #[DataProvider('provideCases')]
    public function testShortestRoute(
        int $distance,
        int $strideLength,
        array $obstacles,
        int $expected
    ): void {
        self::assertSame(
            $expected,
            Solution::shortestRoute($distance, $strideLength, $obstacles)
        );
    }

    public static function provideCases(): array
    {
        return [
            'readme example' => [11, 3, [4, 7, 9], 4],
            'no obstacles stride covers finish' => [5, 4, [], 1],
            'unit distance already finished' => [1, 3, [], 0],
            'zero distance already finished' => [0, 3, [], 0],
            'blocked corridor unreachable' => [5, 2, [1, 2, 3], -1],
            'must hop over single obstacle' => [6, 3, [2], 2],
            'stride one with clear path' => [4, 1, [], 3],
            'stride one blocked mid path' => [5, 1, [2], -1],
            'finish blocked' => [8, 3, [7], -1],
            'obstacle at start is ignored' => [8, 3, [0], 3],
            'zero stride length when movement needed' => [5, 0, [], -1],
            'negative stride length' => [5, -2, [], -1],
            'large stride reaches in one' => [10, 20, [3, 5], 1],
            'obstacles beyond goal ignored' => [5, 2, [10, 20], 2],
            'dense obstacles with narrow gaps' => [12, 2, [1, 3, 5, 7, 9], 6],
            'alternating clear cells' => [12, 2, [2, 4, 6, 8], 6],
            'short track two strides' => [4, 2, [], 2],
            'can skip consecutive obstacles' => [10, 4, [1, 2, 3], 3],
            'all even positions blocked including start' => [
                100,
                2,
                [
                    0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30,
                    32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60,
                    62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 88, 90,
                    92, 94, 96, 98,
                ],
                50,
            ],
        ];
    }
}
