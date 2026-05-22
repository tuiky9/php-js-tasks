<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ValidTimeTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/valid_time.php', 'validTime');
    }

    #[DataProvider('provideCases')]
    public function testValidTime(array $args, mixed $expected): void
    {
        self::assertSame($expected, validTime(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['13:58'], true],
            [['25:51'], false],
            [['02:76'], false],
            [['00:00'], true],
            [['23:59'], true],
        ];
    }
}
