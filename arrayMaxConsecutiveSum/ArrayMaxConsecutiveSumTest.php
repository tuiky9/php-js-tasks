<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ArrayMaxConsecutiveSumTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/array_max_consecutive_sum.php', 'arrayMaxConsecutiveSum');
    }

    #[DataProvider('provideCases')]
    public function testArrayMaxConsecutiveSum(array $input, int $k, int $expected): void
    {
        self::assertSame($expected, arrayMaxConsecutiveSum($input, $k));
    }

    public static function provideCases(): array
    {
        return [
            [[2, 3, 5, 1, 6], 2, 8],
            [[1, 3, 2, 4], 3, 9],
            [[-1, -2, -3, -4], 2, -3],
            [[5, 5, 5, 5], 1, 5],
            [[10, -2, 3, 1, 2], 4, 12],
        ];
    }
}
