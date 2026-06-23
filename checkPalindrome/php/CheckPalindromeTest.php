<?php

declare(strict_types=1);

use CheckPalindrome\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CheckPalindromeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testCheckPalindrome(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
