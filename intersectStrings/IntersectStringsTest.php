<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/php/intersect_strings.php';

final class IntersectStringsTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIntersectStrings(string $string1, string $string2, string $expected): void
    {
        self::assertSame($expected, Solution::solution($string1, $string2));
    }

    public static function provideCases(): array
    {
        return [
            'test1 abcd dcba' => ['abcd', 'dcba', 'abcd'],
            'test2 apple peach' => ['apple', 'peach', 'ape'],
            'test3 aabbcc abc' => ['aabbcc', 'abc', 'abc'],
            'test4 aaaa aaaa' => ['aaaa', 'aaaa', 'aaaa'],
            'test5 abcdef fedcba' => ['abcdef', 'fedcba', 'abcdef'],
            'test6 aabbccdd bcda' => ['aabbccdd', 'bcda', 'abcd'],
            'test7 python thonpy' => ['python', 'thonpy', 'python'],
            'test8 interview review' => ['interview', 'review', 'iervew'],
            'test9 no overlap single b' => ['aaaaa', 'b', ''],
            'test10 no overlap different letters' => ['abc', 'def', ''],

            'both empty strings' => ['', '', ''],
            'empty string1' => ['', 'abc', ''],
            'empty string2' => ['abc', '', ''],
            'single matching character' => ['x', 'x', 'x'],
            'string2 has one occurrence only' => ['aaa', 'a', 'a'],
            'string1 shorter than available in string2' => ['a', 'aaa', 'a'],
            'order from string1 not string2' => ['axy', 'yxa', 'axy'],
            'case sensitive no match' => ['A', 'a', ''],
            'case sensitive both cases' => ['Aa', 'aA', 'Aa'],
            'limited by string2 frequency' => ['bbaa', 'ab', 'ba'],
            'partial word match' => ['hello world', 'loe', 'elo'],
            'digits and letters' => ['a1b2', '2b1a', 'a1b2'],
        ];
    }
}
