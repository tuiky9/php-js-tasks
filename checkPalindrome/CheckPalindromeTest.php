<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class CheckPalindromeTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/check_palindrome.php', 'checkPalindrome');
    }

    #[DataProvider('provideCases')]
    public function testCheckPalindrome(array $args, mixed $expected): void
    {
        self::assertSame($expected, checkPalindrome(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['aabaa'], true],
            [['abac'], false],
            [['a'], true],
            [['azAZa'], false],
            [['aaabaaaa'], false],
        ];
    }
}
