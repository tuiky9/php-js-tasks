<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class BuildPalindromeTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/build_palindrome.php', 'buildPalindrome');
    }

    #[DataProvider('provideCases')]
    public function testBuildPalindrome(array $args, mixed $expected): void
    {
        self::assertSame($expected, buildPalindrome(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['abcdc'], 'abcdcba'],
            [['ababab'], 'abababa'],
            [['abba'], 'abba'],
            [['abc'], 'abcba'],
            [['aacecaaa'], 'aacecaaacecaa'],
        ];
    }
}
