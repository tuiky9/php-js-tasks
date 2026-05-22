<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AreEquallyStrongTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/are_equally_strong.php', 'areEquallyStrong');
    }

    #[DataProvider('provideCases')]
    public function testAreEquallyStrong(
        int $yourLeft,
        int $yourRight,
        int $friendsLeft,
        int $friendsRight,
        bool $expected
    ): void {
        self::assertSame($expected, areEquallyStrong($yourLeft, $yourRight, $friendsLeft, $friendsRight));
    }

    public static function provideCases(): array
    {
        return [
            [10, 15, 15, 10, true],
            [15, 10, 15, 9, false],
            [1, 1, 1, 1, true],
            [5, 7, 7, 5, true],
            [8, 9, 7, 10, false],
        ];
    }
}
