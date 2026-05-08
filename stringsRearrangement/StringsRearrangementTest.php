<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class StringsRearrangementTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/strings_rearrangement.php', 'stringsRearrangement');
    }

    #[DataProvider('provideCases')]
    public function testStringsRearrangement(array $args, mixed $expected): void
    {
        self::assertSame($expected, stringsRearrangement(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[['aba', 'bbb', 'bab']], false],
            [[['ab', 'bb', 'aa']], true],
            [[['q', 'q']], false],
            [[['zzzzab', 'zzzzbb', 'zzzzaa']], true],
            [[['abc', 'abx', 'axx', 'abc']], false],
        ];
    }
}
