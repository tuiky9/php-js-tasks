<?php

declare(strict_types=1);

use BuildPalindrome\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class BuildPalindromeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testBuildPalindrome(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
