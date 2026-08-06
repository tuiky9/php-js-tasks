<?php

declare(strict_types=1);

use GenerateParentheses\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class GenerateParenthesesTest extends TestCase
{
    /**
     * @param list<string> $expected
     */
    #[DataProvider('provideCases')]
    public function testGenerateParentheses(int $n, array $expected): void
    {
        self::assertSame($expected, Solution::generateParentheses($n));
    }

    public static function provideCases(): array
    {
        return [
            'readme three pairs' => [
                3,
                [
                    '((()))',
                    '(()())',
                    '(())()',
                    '()(())',
                    '()()()',
                ],
            ],
            'one pair' => [1, ['()']],
            'two pairs' => [
                2,
                [
                    '(())',
                    '()()',
                ],
            ],
            'zero pairs' => [0, []],
            'negative pairs' => [-1, []],
            'four pairs count and samples' => [
                4,
                [
                    '(((())))',
                    '((()()))',
                    '((())())',
                    '((()))()',
                    '(()(()))',
                    '(()()())',
                    '(()())()',
                    '(())(())',
                    '(())()()',
                    '()((()))',
                    '()(()())',
                    '()(())()',
                    '()()(())',
                    '()()()()',
                ],
            ],
        ];
    }

    public function testCatalanCounts(): void
    {
        self::assertCount(0, Solution::generateParentheses(0));
        self::assertCount(1, Solution::generateParentheses(1));
        self::assertCount(2, Solution::generateParentheses(2));
        self::assertCount(5, Solution::generateParentheses(3));
        self::assertCount(14, Solution::generateParentheses(4));
        self::assertCount(42, Solution::generateParentheses(5));
    }

    public function testCallableOnInstanceForZero(): void
    {
        $solution = new Solution();
        self::assertSame([], $solution->generateParentheses(0));
    }

    public function testAllResultsAreValidForN3(): void
    {
        foreach (Solution::generateParentheses(3) as $candidate) {
            self::assertTrue(self::isValid($candidate), $candidate);
            self::assertSame(6, strlen($candidate));
        }
    }

    private static function isValid(string $parentheses): bool
    {
        $balance = 0;

        for ($index = 0, $length = strlen($parentheses); $index < $length; $index++) {
            $balance += $parentheses[$index] === '(' ? 1 : -1;

            if ($balance < 0) {
                return false;
            }
        }

        return $balance === 0;
    }
}
