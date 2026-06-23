<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ValidTime\Solution;

final class ValidTimeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testValidTime(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['13:58'], true],
            [['25:51'], false],
            [['02:76'], false],
            [['00:00'], true],
            [['23:59'], true],
        ];
    }
}
