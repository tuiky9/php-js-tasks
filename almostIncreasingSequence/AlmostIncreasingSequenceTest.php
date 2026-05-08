<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AlmostIncreasingSequenceTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/almost_increasing_sequence.php', 'almostIncreasingSequence');
    }

    #[DataProvider('provideCases')]
    public function testAlmostIncreasingSequence(array $input, bool $expected): void
    {
        self::assertSame($expected, almostIncreasingSequence($input));
    }

    public static function provideCases(): array
    {
        return [
            [[1, 3, 2, 1], false],
            [[1, 3, 2], true],
            [[1, 2, 3, 4], true],
            [[10, 1, 2, 3, 4, 5], true],
            [[1, 1, 2, 3], true],
        ];
    }
}
