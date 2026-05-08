<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class KnapsackLightTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/knapsack_light.php', 'knapsackLight');
    }

    #[DataProvider('provideCases')]
    public function testKnapsackLight(array $args, mixed $expected): void
    {
        self::assertSame($expected, knapsackLight(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[10, 5, 6, 4, 8], 10],
            [[10, 5, 6, 4, 9], 16],
            [[5, 3, 7, 4, 6], 7],
            [[5, 3, 7, 4, 2], 0],
            [[3, 1, 2, 2, 2], 3],
        ];
    }
}
