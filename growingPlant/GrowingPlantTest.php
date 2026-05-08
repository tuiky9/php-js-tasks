<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class GrowingPlantTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/growing_plant.php', 'growingPlant');
    }

    #[DataProvider('provideCases')]
    public function testGrowingPlant(array $args, mixed $expected): void
    {
        self::assertSame($expected, growingPlant(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[100, 10, 910], 10],
            [[10, 9, 4], 1],
            [[5, 2, 7], 2],
            [[3, 1, 10], 5],
            [[7, 3, 21], 5],
        ];
    }
}
