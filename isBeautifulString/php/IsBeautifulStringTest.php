<?php

declare(strict_types=1);

use IsBeautifulString\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class IsBeautifulStringTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIsBeautifulString(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['bbbaacdafe'], true],
            [['aabbb'], false],
            [['bbc'], false],
            [[''], true],
            [['abcdefghijklmnopqrstuvwxyz'], true],
        ];
    }
}
