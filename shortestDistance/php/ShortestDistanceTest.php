<?php

declare(strict_types=1);

use ShortestDistance\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ShortestDistanceTest extends TestCase
{
    /** @var array<string, list<string>> */
    private static array $europeRoads = [
        'Berlin' => ['Paris', 'Warsaw'],
        'Paris' => ['Berlin', 'Madrid'],
        'Warsaw' => ['Berlin', 'Kyiv'],
        'Madrid' => ['Paris'],
        'Kyiv' => ['Warsaw'],
        'Rome' => [],
    ];

    #[DataProvider('provideCases')]
    public function testShortestDistance(array $roads, string $start, string $destination, ?int $expected): void
    {
        self::assertSame($expected, Solution::solution($roads, $start, $destination));
    }

    public static function provideCases(): array
    {
        return [
            'same start and destination' => [self::$europeRoads, 'Paris', 'Paris', 0],
            'readme berlin to kyiv' => [self::$europeRoads, 'Berlin', 'Kyiv', 2],
            'unreachable city' => [self::$europeRoads, 'Berlin', 'Rome', null],
            'adjacent cities' => [self::$europeRoads, 'Berlin', 'Paris', 1],
            'longer path madrid to kyiv' => [self::$europeRoads, 'Madrid', 'Kyiv', 4],
            'isolated destination from isolated start' => [self::$europeRoads, 'Rome', 'Berlin', null],
            'simple chain' => [
                [
                    'A' => ['B'],
                    'B' => ['A', 'C'],
                    'C' => ['B', 'D'],
                    'D' => ['C'],
                ],
                'A',
                'D',
                3,
            ],
            'branching graph chooses shorter path' => [
                [
                    'S' => ['A', 'B'],
                    'A' => ['S', 'C'],
                    'B' => ['S', 'C'],
                    'C' => ['A', 'B', 'T'],
                    'T' => ['C'],
                ],
                'S',
                'T',
                3,
            ],
            'missing start city' => [
                ['X' => ['Y'], 'Y' => ['X']],
                'Z',
                'Y',
                null,
            ],
            'empty graph same city' => [[], 'Home', 'Home', 0],
            'empty graph different cities' => [[], 'Home', 'Away', null],
        ];
    }
}
