<?php

declare(strict_types=1);

use IsLucky\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class IsLuckyTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIsLucky(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
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
