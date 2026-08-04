<?php

declare(strict_types=1);

use UniquePermutations\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class UniquePermutationsTest extends TestCase
{
    /**
     * @param list<int> $nums
     * @param list<list<int>> $expected
     */
    #[DataProvider('provideCases')]
    public function testUniquePermutations(array $nums, array $expected): void
    {
        self::assertSame($expected, Solution::solution($nums));
    }

    public static function provideCases(): array
    {
        return [
            'readme with duplicates' => [
                [1, 1, 2],
                [
                    [1, 1, 2],
                    [1, 2, 1],
                    [2, 1, 1],
                ],
            ],
            'readme distinct three' => [
                [1, 2, 3],
                [
                    [1, 2, 3],
                    [1, 3, 2],
                    [2, 1, 3],
                    [2, 3, 1],
                    [3, 1, 2],
                    [3, 2, 1],
                ],
            ],
            'empty input' => [[], [[]]],
            'single element' => [[7], [[7]]],
            'two identical' => [
                [2, 2],
                [[2, 2]],
            ],
            'two distinct unsorted' => [
                [3, 1],
                [
                    [1, 3],
                    [3, 1],
                ],
            ],
            'all identical three' => [
                [5, 5, 5],
                [[5, 5, 5]],
            ],
            'two duplicates and one unique' => [
                [2, 1, 2],
                [
                    [1, 2, 2],
                    [2, 1, 2],
                    [2, 2, 1],
                ],
            ],
            'negatives and zero' => [
                [0, -1, 0],
                [
                    [-1, 0, 0],
                    [0, -1, 0],
                    [0, 0, -1],
                ],
            ],
            'four distinct count' => [
                [1, 2, 3, 4],
                [
                    [1, 2, 3, 4],
                    [1, 2, 4, 3],
                    [1, 3, 2, 4],
                    [1, 3, 4, 2],
                    [1, 4, 2, 3],
                    [1, 4, 3, 2],
                    [2, 1, 3, 4],
                    [2, 1, 4, 3],
                    [2, 3, 1, 4],
                    [2, 3, 4, 1],
                    [2, 4, 1, 3],
                    [2, 4, 3, 1],
                    [3, 1, 2, 4],
                    [3, 1, 4, 2],
                    [3, 2, 1, 4],
                    [3, 2, 4, 1],
                    [3, 4, 1, 2],
                    [3, 4, 2, 1],
                    [4, 1, 2, 3],
                    [4, 1, 3, 2],
                    [4, 2, 1, 3],
                    [4, 2, 3, 1],
                    [4, 3, 1, 2],
                    [4, 3, 2, 1],
                ],
            ],
        ];
    }

    public function testDoesNotCallPhpPermutationsHelper(): void
    {
        $source = file_get_contents(__DIR__ . '/unique_permutations.php');
        self::assertNotFalse($source);
        self::assertDoesNotMatchRegularExpression(
            '/\b(array_permutation)\s*\(/i',
            $source
        );
    }
}
