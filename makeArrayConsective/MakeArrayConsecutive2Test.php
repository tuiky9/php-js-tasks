<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class MakeArrayConsecutive2Test extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/make_array_consective_2.php', 'makeArrayConsecutive2');
    }

    #[DataProvider('provideCases')]
    public function testMakeArrayConsecutive2(array $args, int $expected): void
    {
        self::assertSame($expected, makeArrayConsecutive2(...$args));
    }

    public static function provideCases(): array
    {
        return [
            'readme classic' => [[[6, 2, 3, 8]], 3],
            'gap at start' => [[[0, 3]], 2],
            'single statue' => [[[5]], 0],
            'every other missing' => [[[2, 4, 6]], 2],
            'already consecutive' => [[[1, 2, 3, 4, 5]], 0],
            'two adjacent' => [[[10, 11]], 0],
            'large range one gap' => [[[0, 1, 100]], 98],
            'unsorted input' => [[[9, 1, 5]], 6],
            'zero span' => [[[0, 2]], 1],
            'all zeros duplicate sizes conceptually excluded' => [[[0, 0, 1]], 0],
        ];
    }
}
