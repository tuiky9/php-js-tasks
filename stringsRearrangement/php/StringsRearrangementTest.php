<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use StringsRearrangement\Solution;

final class StringsRearrangementTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testStringsRearrangement(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[['aba', 'bbb', 'bab']], false],
            [[['ab', 'bb', 'aa']], true],
            [[['q', 'q']], false],
            [[['zzzzab', 'zzzzbb', 'zzzzaa']], true],
            [[['abc', 'abx', 'axx', 'abc']], false],
        ];
    }
}
