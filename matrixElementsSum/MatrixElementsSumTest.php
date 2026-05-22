<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class MatrixElementsSumTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/matrix_elements_sum.php', 'matrixElementsSum');
    }

    #[DataProvider('provideCases')]
    public function testMatrixElementsSum(array $args, mixed $expected): void
    {
        self::assertSame($expected, matrixElementsSum(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[[0, 1, 1, 2], [0, 5, 0, 0], [2, 0, 3, 3]]], 9],
            [[[[1, 1, 1, 0], [0, 5, 0, 1], [2, 1, 3, 10]]], 9],
            [[[[1]]], 1],
            [[[[0]]], 0],
            [[[[4, 0], [1, 1], [2, 2]]], 7],
        ];
    }
}
