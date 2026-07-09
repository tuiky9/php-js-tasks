<?php

declare(strict_types=1);

use RepeatedCharsLowestIndex\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class RepeatedCharsLowestIndexTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testRepeatedCharsLowestIndex(array $args, ?string $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'empty string' => [[''], null],
            'single character' => [['a'], null],
            'all unique characters' => [['abcd'], null],
            'single repeat at end' => [['abcdb'], 'b'],
            'complex mixed repeats' => [['abccdccdd1888922kka'], 'a'],
            'immediate repeat' => [['aa'], 'a'],
            'repeat with gap' => [['aba'], 'a'],
            'earlier repeating character wins' => [['bab'], 'b'],
            'double repeat at start' => [['bba'], 'b'],
            'digits and letters' => [['abc1a'], 'a'],
            'negative not applicable single charset' => [['112233'], '1'],
            'later repeat does not win' => [['abcdefga'], 'a'],
        ];
    }
}
