<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AbsoluteValuesSumMinimizationTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/absolute_values_sum_minimization.php', 'absoluteValuesSumMinimization');
    }

    #[DataProvider('provideCases')]
    public function testAbsoluteValuesSumMinimization(array $input, int $expected): void
    {
        self::assertSame($expected, absoluteValuesSumMinimization($input));
    }

    public static function provideCases(): array
    {
        return [
            [[2, 4, 7], 4],
            [[2, 3], 2],
            [[-10, -3, 0, 5, 9], 0],
            [[1], 1],
            [[1, 1, 1, 1, 2], 1],
            [[1, 2, 145, 146, 2, 1], 145],
        ];
    }
}
