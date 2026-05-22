<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class LongestDigitsPrefixTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/longest_digits_prefix.php', 'longestDigitsPrefix');
    }

    #[DataProvider('provideCases')]
    public function testLongestDigitsPrefix(array $args, mixed $expected): void
    {
        self::assertSame($expected, longestDigitsPrefix(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['123aa1'], '123'],
            [['0123456789'], '0123456789'],
            [['abc'], ''],
            [['1'], '1'],
            [['001a'], '001'],
        ];
    }
}
