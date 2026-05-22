<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class CircleOfNumbersTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/circle_of_numbers.php', 'circleOfNumbers');
    }

    #[DataProvider('provideCases')]
    public function testCircleOfNumbers(array $args, mixed $expected): void
    {
        self::assertSame($expected, circleOfNumbers(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[10, 2], 7],
            [[10, 7], 2],
            [[4, 1], 3],
            [[6, 3], 0],
            [[2, 0], 1],
        ];
    }
}
