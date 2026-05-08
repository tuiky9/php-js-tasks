<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class EvenDigitsOnlyTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/even_digits_only.php', 'evenDigitsOnly');
    }

    #[DataProvider('provideCases')]
    public function testEvenDigitsOnly(array $args, mixed $expected): void
    {
        self::assertSame($expected, evenDigitsOnly(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[248622], true],
            [[642386], false],
            [[0], true],
            [[8], true],
            [[13579], false],
        ];
    }
}
