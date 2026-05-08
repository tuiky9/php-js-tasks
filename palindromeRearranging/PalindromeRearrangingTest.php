<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class PalindromeRearrangingTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/palindrome_rearranging.php', 'palindromeRearranging');
    }

    #[DataProvider('provideCases')]
    public function testPalindromeRearranging(array $args, mixed $expected): void
    {
        self::assertSame($expected, palindromeRearranging(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['aabb'], true],
            [['aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc'], false],
            [['abbcabb'], true],
            [['abcad'], false],
            [['a'], true],
        ];
    }
}
