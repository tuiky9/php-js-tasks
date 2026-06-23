<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ReverseInParantheses\Solution;

final class ReverseInParanthesesTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testReverseInParantheses(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['(bar)'], 'rab'],
            [['foo(bar)baz'], 'foorabbaz'],
            [['foo(bar)baz(blim)'], 'foorabbazmilb'],
            [['foo(bar(baz))blim'], 'foobazrabblim'],
            [['abc(cba)ab(bac)c'], 'abcabcabcabc'],
        ];
    }
}
