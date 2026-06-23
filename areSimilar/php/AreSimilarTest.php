<?php

declare(strict_types=1);

use AreSimilar\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AreSimilarTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAreSimilar(array $a, array $b, bool $expected): void
    {
        self::assertSame($expected, Solution::solution($a, $b));
    }

    public static function provideCases(): array
    {
        return [
            [[1, 2, 3], [1, 2, 3], true],
            [[1, 2, 3], [2, 1, 3], true],
            [[1, 2, 2], [2, 1, 1], false],
            [[1, 2, 3], [1, 2, 4], false],
            [[3, 1, 2], [1, 3, 2], true],
        ];
    }
}
