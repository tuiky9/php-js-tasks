<?php

declare(strict_types=1);

use CommonCharacterCount\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CommonCharacterCountTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testCommonCharacterCount(array $args, int $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme example aabcc adcaa' => [['aabcc', 'adcaa'], 3],
            'equal z blocks' => [['zzzz', 'zzzzzzz'], 4],
            'single b overlap' => [['abca', 'xyzb'], 1],
            'no overlap' => [['a', 'b'], 0],
            'both empty' => [['', ''], 0],
            'one empty' => [['abc', ''], 0],
            'case sensitive mismatch' => [['A', 'a'], 0],
            'case sensitive match' => [['Aa', 'aA'], 2],
            'full permutation same length' => [['abc', 'bca'], 3],
            'repeat consume second' => [['aaa', 'aa'], 2],
            'identical strings' => [['hello', 'hello'], 5],
            'unicode not counted as single char in bytes' => [["\xC3\xA9", "\xC3\xA9"], 2],
        ];
    }
}
