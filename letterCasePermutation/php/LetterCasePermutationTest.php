<?php

declare(strict_types=1);

use LetterCasePermutation\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LetterCasePermutationTest extends TestCase
{
    /**
     * @param list<string> $expected
     */
    #[DataProvider('provideCases')]
    public function testLetterCasePermutation(string $s, array $expected): void
    {
        self::assertSame($expected, Solution::solution($s));
    }

    public static function provideCases(): array
    {
        return [
            'readme mixed letters and digits' => [
                'a1b2',
                ['a1b2', 'a1B2', 'A1b2', 'A1B2'],
            ],
            'readme single letter amid digits' => [
                '3z4',
                ['3z4', '3Z4'],
            ],
            'digits only' => [
                '12345',
                ['12345'],
            ],
            'empty string' => [
                '',
                [''],
            ],
            'uppercase input normalized' => [
                'A1B2',
                ['a1b2', 'a1B2', 'A1b2', 'A1B2'],
            ],
            'mixed case input' => [
                'Ab',
                ['ab', 'aB', 'Ab', 'AB'],
            ],
            'special characters fixed' => [
                'a#b',
                ['a#b', 'a#B', 'A#b', 'A#B'],
            ],
            'single lowercase letter' => [
                'c',
                ['c', 'C'],
            ],
            'single uppercase letter' => [
                'C',
                ['c', 'C'],
            ],
        ];
    }

    public function testCallableOnInstance(): void
    {
        $solution = new Solution();
        self::assertSame(['3z4', '3Z4'], $solution->solution('3z4'));
    }
}
