<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class MessageFromBinaryCodeTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/message_from_binary_code.php', 'messageFromBinaryCode');
    }

    #[DataProvider('provideCases')]
    public function testMessageFromBinaryCode(array $args, mixed $expected): void
    {
        self::assertSame($expected, messageFromBinaryCode(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['010010000110010101101100011011000110111100100001'], 'Hello!'],
            [['0100000101000010'], 'AB'],
            [['01100001'], 'a'],
            [['0011000100110010'], '12'],
            [['0101100001011001'], 'XY'],
        ];
    }
}
