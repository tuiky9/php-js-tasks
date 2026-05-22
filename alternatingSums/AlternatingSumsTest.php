<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AlternatingSumsTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/alternating_sums.php', 'alternatingSums');
    }

    #[DataProvider('provideCases')]
    public function testAlternatingSums(array $input, array $expected): void
    {
        self::assertSame($expected, alternatingSums($input));
    }

    public static function provideCases(): array
    {
        return [
            [[50, 60, 60, 45, 70], [180, 105]],
            [[100], [100, 0]],
            [[1, 2, 3, 4, 5, 6], [9, 12]],
            [[10, 10, 10, 10], [20, 20]],
            [[7, 3, 5], [12, 3]],
        ];
    }
}
