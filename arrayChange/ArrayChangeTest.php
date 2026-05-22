<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ArrayChangeTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/array_change.php', 'arrayChange');
    }

    #[DataProvider('provideCases')]
    public function testArrayChange(array $input, int $expected): void
    {
        self::assertSame($expected, arrayChange($input));
    }

    public static function provideCases(): array
    {
        return [
            [[1, 1, 1], 3],
            [[-1000, 0, -2, 0], 5],
            [[1, 2, 3], 0],
            [[3, 2, 1], 6],
            [[2, 2, 2, 2], 6],
        ];
    }
}
