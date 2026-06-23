<?php

declare(strict_types=1);

use AddBorder\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AddBorderTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testAddBorder(array $input, array $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            [['abc', 'ded'], ['*****', '*abc*', '*ded*', '*****']],
            [['a'], ['***', '*a*', '***']],
            [['aa', 'bb', 'cc'], ['****', '*aa*', '*bb*', '*cc*', '****']],
            [['zxy', '123'], ['*****', '*zxy*', '*123*', '*****']],
            [['hello', 'world'], ['*******', '*hello*', '*world*', '*******']],
        ];
    }
}
