<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class DedupePreserveOrderTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/dedupe_preserve_order.php', 'dedupePreserveOrder');
    }

    #[DataProvider('provideCases')]
    public function testDedupePreserveOrder(array $input, array $expected): void
    {
        self::assertSame($expected, dedupePreserveOrder($input));
    }

    public static function provideCases(): array
    {
        return [
            'readme integers' => [[3, 1, 3, 2, 1], [3, 1, 2]],
            'readme strings' => [['a', 'b', 'a'], ['a', 'b']],
            'readme no duplicates' => [[1, 2, 3], [1, 2, 3]],
            'readme empty' => [[], []],
            'readme booleans' => [[true, true, false], [true, false]],
            'strict int and string' => [[1, '1'], [1, '1']],
            'single element' => [[42], [42]],
            'all same' => [[0, 0, 0], [0]],
            'preserves order of first seen' => [[5, 4, 5, 3, 4, 2], [5, 4, 3, 2]],
            'null and false distinct' => [[null, false, null, false], [null, false]],
            'float strict' => [[1.0, 1, 1.0], [1.0, 1]],
            'associative input reindexed output' => [['x' => 'a', 'y' => 'b', 'z' => 'a'], ['a', 'b']],
        ];
    }

    public function testInputNotMutated(): void
    {
        $input = [1, 2, 1, 3];
        $copy = $input;

        dedupePreserveOrder($input);

        self::assertSame($copy, $input);
    }
}
