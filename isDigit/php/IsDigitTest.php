<?php

declare(strict_types=1);

use IsDigit\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class IsDigitTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIsDigit(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['0'], true],
            [['-'], false],
            [['o'], false],
            [['1'], true],
            [['9'], true],
        ];
    }
}
