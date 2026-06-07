<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/php/count_less_than_matrix.php';

final class CountLessThanMatrixTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testCountLessThan(array $matrix, int $target, int $expected): void
    {
        self::assertSame($expected, Solution::countLessThan($matrix, $target));
    }

    public static function provideCases(): array
    {
        return [
            'readme example target 5' => [
                [
                    [1, 2, 3, 4],
                    [2, 3, 4, 5],
                    [3, 4, 5, 6],
                    [4, 5, 6, 7],
                ],
                5,
                10,
            ],
            'readme small matrix' => [[[1, 4], [2, 5]], 3, 2],
            'none strictly less than target' => [[[5, 6], [7, 8]], 5, 0],
            'all values less than target' => [[[1, 2], [3, 4]], 10, 4],

            'single cell below target' => [[[4]], 5, 1],
            'single cell equal to target' => [[[4]], 4, 0],
            'single cell above target' => [[[4]], 3, 0],

            'empty matrix' => [[], 5, 0],
            'zero columns' => [[[]], 5, 0],

            'target below minimum' => [[[2, 3], [4, 5]], 1, 0],
            'target above maximum' => [[[2, 3], [4, 5]], 100, 4],

            'duplicates and equal values excluded' => [[[1, 2, 2], [2, 3, 4]], 2, 1],
            'negative values' => [[[-5, 0], [1, 3]], 1, 2],

            'one row' => [[[1, 3, 5, 7]], 5, 2],
            'one column' => [[[1], [3], [5], [7]], 5, 2],
        ];
    }
}
