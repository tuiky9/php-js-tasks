<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class LongestWordTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/longest_word.php', 'longestWord');
    }

    #[DataProvider('provideCases')]
    public function testLongestWord(array $args, mixed $expected): void
    {
        self::assertSame($expected, longestWord(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['Ready, steady, go!'], 'steady'],
            [['Ready[[[, steady, go!'], 'steady'],
            [['abc1234567890'], 'abc'],
            [['To be or not to be'], 'not'],
            [['A!!! aa'], 'aa'],
        ];
    }
}
