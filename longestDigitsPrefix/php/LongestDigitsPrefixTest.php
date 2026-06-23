<?php

declare(strict_types=1);

use LongestDigitsPrefix\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LongestDigitsPrefixTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testLongestDigitsPrefix(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['123aa1'], '123'],
            [['0123456789'], '0123456789'],
            [['abc'], ''],
            [['1'], '1'],
            [['001a'], '001'],
        ];
    }
}
