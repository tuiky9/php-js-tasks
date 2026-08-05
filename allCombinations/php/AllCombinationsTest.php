<?php

declare(strict_types=1);

use AllCombinations\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class AllCombinationsTest extends TestCase
{
    /**
     * @param list<string> $expected
     */
    #[DataProvider('provideCases')]
    public function testAllCombinations(string $s, array $expected): void
    {
        self::assertSame($expected, Solution::allCombinations($s));
    }

    public static function provideCases(): array
    {
        return [
            'readme abc' => [
                'abc',
                [
                    'a', 'ab', 'abc', 'ac', 'acb',
                    'b', 'ba', 'bac', 'bc', 'bca',
                    'c', 'ca', 'cab', 'cb', 'cba',
                ],
            ],
            'two characters' => [
                'ab',
                ['a', 'ab', 'b', 'ba'],
            ],
            'single character' => [
                'z',
                ['z'],
            ],
            'empty string' => [
                '',
                [],
            ],
            'two same letters' => [
                'aa',
                ['a', 'aa'],
            ],
            'sorted output for cab' => [
                'cab',
                [
                    'a', 'ab', 'abc', 'ac', 'acb',
                    'b', 'ba', 'bac', 'bc', 'bca',
                    'c', 'ca', 'cab', 'cb', 'cba',
                ],
            ],
            'digits as characters' => [
                '12',
                ['1', '12', '2', '21'],
            ],
        ];
    }

    public function testResultCountForThreeDistinctChars(): void
    {
        $result = Solution::allCombinations('xyz');
        // C(3,1)*1! + C(3,2)*2! + C(3,3)*3! = 3 + 6 + 6 = 15
        self::assertCount(15, $result);
        self::assertSame('zyx', $result[14]);
        self::assertSame('x', $result[0]);
    }
}
