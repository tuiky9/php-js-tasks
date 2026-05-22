<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AreSimilarTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/are_similar.php', 'areSimilar');
    }

    #[DataProvider('provideCases')]
    public function testAreSimilar(array $a, array $b, bool $expected): void
    {
        self::assertSame($expected, areSimilar($a, $b));
    }

    public static function provideCases(): array
    {
        return [
            [[1, 2, 3], [1, 2, 3], true],
            [[1, 2, 3], [2, 1, 3], true],
            [[1, 2, 2], [2, 1, 1], false],
            [[1, 2, 3], [1, 2, 4], false],
            [[3, 1, 2], [1, 3, 2], true],
        ];
    }
}
