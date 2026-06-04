<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class BinarySearchTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/binary_search.php', 'binarySearch');
    }

    #[DataProvider('provideCases')]
    public function testBinarySearch(array $sorted, int $target, int $expected): void
    {
        self::assertSame($expected, binarySearch($sorted, $target));
    }

    public static function provideCases(): array
    {
        return [
            'readme middle element' => [[1, 3, 5, 7, 9], 5, 2],
            'readme not found' => [[1, 3, 5, 7, 9], 4, -1],
            'readme first element' => [[1, 3, 5, 7, 9], 1, 0],
            'readme last element' => [[1, 3, 5, 7, 9], 9, 4],
            'readme beyond max' => [[1, 3, 5, 7, 9], 10, -1],
            'readme below min' => [[1, 3, 5, 7, 9], 0, -1],

            'duplicate leftmost index' => [[2, 4, 4, 4, 8], 4, 1],
            'empty array' => [[], 10, -1],
            'single match' => [[42], 42, 0],
            'single no match' => [[42], 7, -1],

            'two elements first' => [[10, 20], 10, 0],
            'two elements second' => [[10, 20], 20, 1],
            'negative values' => [[-10, -5, 0, 3, 7], -5, 1],
            'all same target' => [[5, 5, 5, 5], 5, 0],

            'large sparse array hit' => [[1, 100, 200, 300, 400, 500], 300, 3],
            'large sparse array miss' => [[1, 100, 200, 300, 400, 500], 250, -1],
        ];
    }
}
