<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class CenturyFromYearTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/century_from_year.php', 'centuryFromYear');
    }

    #[DataProvider('provideCases')]
    public function testCenturyFromYear(array $args, mixed $expected): void
    {
        self::assertSame($expected, centuryFromYear(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[1905], 20],
            [[1700], 17],
            [[1], 1],
            [[2000], 20],
            [[2001], 21],
        ];
    }
}
