<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ArrayReplaceTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/array_replace.php', 'arrayReplace');
    }

    #[DataProvider('provideCases')]
    public function testArrayReplace(array $args, mixed $expected): void
    {
        self::assertSame($expected, arrayReplace(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[[1, 2, 1], 1, 3], [3, 2, 3]],
            [[[1, 2, 3], 4, 0], [1, 2, 3]],
            [[[5, 5, 5], 5, 1], [1, 1, 1]],
            [[[0, -1, 0], 0, 9], [9, -1, 9]],
            [[[2, 3, 2, 3], 3, 7], [2, 7, 2, 7]],
        ];
    }
}
