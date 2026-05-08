<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class IsLuckyTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/is_lucky.php', 'isLucky');
    }

    #[DataProvider('provideCases')]
    public function testIsLucky(array $args, mixed $expected): void
    {
        self::assertSame($expected, isLucky(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[1230], true],
            [[239017], false],
            [[11], true],
            [[1001], true],
            [[134008], true],
        ];
    }
}
