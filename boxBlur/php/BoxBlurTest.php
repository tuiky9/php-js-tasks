<?php

declare(strict_types=1);

use BoxBlur\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class BoxBlurTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testBoxBlur(array $args, array $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme single cell' => [
                [[[1, 1, 1], [1, 7, 1], [1, 1, 1]]],
                [[1]],
            ],
            'readme four by four' => [
                [[[7, 4, 0, 1], [5, 6, 2, 2], [6, 10, 7, 8], [1, 4, 2, 0]]],
                [[5, 4], [4, 4]],
            ],
            'uniform threes' => [
                [[[3, 3, 3], [3, 3, 3], [3, 3, 3]]],
                [[3]],
            ],
            'all zeros' => [
                [[[0, 0, 0], [0, 0, 0], [0, 0, 0]]],
                [[0]],
            ],
            'three by five' => [
                [[[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15]]],
                [[7, 8, 9]],
            ],
            'five by three' => [
                [[[1, 2, 3], [4, 5, 6], [7, 8, 9], [10, 11, 12], [13, 14, 15]]],
                [[5], [8], [11]],
            ],
            'floor division not round' => [
                [[[0, 0, 0], [0, 8, 0], [0, 0, 0]]],
                [[0]],
            ],
        ];
    }
}
