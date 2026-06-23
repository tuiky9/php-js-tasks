<?php

declare(strict_types=1);

use FirstDigit\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FirstDigitTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testFirstDigit(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['var_1__Int'], '1'],
            [['q2q-q'], '2'],
            [['0ss'], '0'],
            [['abc123'], '1'],
        ];
    }
}
