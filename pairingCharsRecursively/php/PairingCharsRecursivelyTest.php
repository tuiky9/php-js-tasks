<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use PairingCharsRecursively\Solution;

final class PairingCharsRecursivelyTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSolve(string $input, string $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            'readme even example' => ['abc789', 'a9b8c7'],
            'readme odd three chars' => ['abc', 'acb'],
            'readme two chars' => ['12', '12'],
            'readme single char' => ['5', '5'],
            'readme odd five chars' => ['abcde', 'aebdc'],
            'empty string' => ['', ''],
            'even four digits' => ['1234', '1423'],
            'even six digits' => ['246813', '234168'],
            'odd seven digits' => ['1234567', '1726354'],
            'all same digit even' => ['1111', '1111'],
        ];
    }
}
