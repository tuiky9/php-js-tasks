<?php

declare(strict_types=1);

use VerticesWithinDistance\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class VerticesWithinDistanceTest extends TestCase
{
    /** @var array<int, list<int>> */
    private static array $sampleGraph = [
        1 => [2, 3],
        2 => [1, 4, 5],
        3 => [1],
        4 => [2],
        5 => [2, 6],
        6 => [5],
    ];

    /**
     * @param array<int, list<int>> $graph
     * @param list<int> $expected
     */
    #[DataProvider('provideCases')]
    public function testFindVerticesWithinDistance(
        array $graph,
        int $start,
        int $distance,
        array $expected
    ): void {
        self::assertSame(
            $expected,
            Solution::findVerticesWithinDistance($graph, $start, $distance)
        );
    }

    public static function provideCases(): array
    {
        return [
            'readme start 1 distance 2' => [self::$sampleGraph, 1, 2, [1, 2, 3, 4, 5]],
            'zero distance is only start' => [self::$sampleGraph, 1, 0, [1]],
            'one hop from start' => [self::$sampleGraph, 1, 1, [1, 2, 3]],
            'covers entire connected component' => [self::$sampleGraph, 1, 3, [1, 2, 3, 4, 5, 6]],
            'beyond diameter still whole component' => [self::$sampleGraph, 1, 100, [1, 2, 3, 4, 5, 6]],
            'start in the middle distance 1' => [self::$sampleGraph, 2, 1, [1, 2, 4, 5]],
            'leaf start distance 1' => [self::$sampleGraph, 4, 1, [2, 4]],
            'leaf start distance 2' => [self::$sampleGraph, 4, 2, [1, 2, 4, 5]],
            'negative distance yields empty' => [self::$sampleGraph, 1, -1, []],
            'disconnected component ignored' => [
                [
                    1 => [2],
                    2 => [1],
                    3 => [4],
                    4 => [3],
                ],
                1,
                10,
                [1, 2],
            ],
            'isolated start vertex' => [
                [
                    1 => [],
                    2 => [3],
                    3 => [2],
                ],
                1,
                5,
                [1],
            ],
            'start missing from adjacency keys' => [
                [
                    2 => [3],
                    3 => [2],
                ],
                1,
                2,
                [1],
            ],
            'single vertex graph' => [
                [7 => []],
                7,
                0,
                [7],
            ],
            'sorted output regardless of neighbor order' => [
                [
                    1 => [5, 3, 4],
                    3 => [1],
                    4 => [1],
                    5 => [1],
                ],
                1,
                1,
                [1, 3, 4, 5],
            ],
            'cycle chooses shortest hops' => [
                [
                    1 => [2, 4],
                    2 => [1, 3],
                    3 => [2, 4],
                    4 => [1, 3],
                ],
                1,
                1,
                [1, 2, 4],
            ],
            'empty graph with start only by label' => [[], 9, 0, [9]],
            'empty graph negative distance' => [[], 9, -3, []],
        ];
    }
}
