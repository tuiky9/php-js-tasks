<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use PalindromeRearranging\Solution;

final class PalindromeRearrangingTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testPalindromeRearranging(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
