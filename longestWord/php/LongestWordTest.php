<?php

declare(strict_types=1);

use LongestWord\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LongestWordTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testLongestWord(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['Ready, steady, go!'], 'steady'],
            [['Ready[[[, steady, go!'], 'steady'],
            [['abc1234567890'], 'abc'],
            [['To be or not to be'], 'not'],
            [['A!!! aa'], 'aa'],
        ];
    }
}
